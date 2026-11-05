<?php

/**
 * Dexter Framework
 *
 * @package   Dexter
 * @author    Charles Corrêa <charlescorreaweb@gmail.com>
 * @copyright 2026 Charles Corrêa
 * @license   MIT
 * @version   0.1.0-beta
 */

declare(strict_types=1);

namespace Dexter\Database;

use Closure;
use Dexter\Database\Conexao\ConexaoFactory;
use Dexter\Database\Gramatica\GramaticaFirebird;
use Dexter\Database\Gramatica\GramaticaInterface;
use Dexter\Database\Gramatica\GramaticaPadrao;
use Dexter\Database\Query\QueryBuilder;
use InvalidArgumentException;
use PDO;
use Throwable;

/**
 * Gerenciador central de conexões de banco de dados do Dexter Framework.
 * Suporta múltiplas conexões simultâneas (PostgreSQL, MySQL, SQLite, SQL Server, Firebird).
 */
class DatabaseManager
{
    /**
     * @var array<string, array{
     *     driver: string,
     *     host?: string,
     *     porta?: int|string,
     *     banco: string,
     *     usuario?: string,
     *     senha?: string,
     *     charset?: string,
     *     timezone?: string,
     *     opcoes?: array<int, mixed>
     * }>
     */
    protected array $configuracoes = [];

    /**
     * @var array<string, PDO>
     */
    protected array $conexoesAtivas = [];

    /**
     * @var string
     */
    protected string $conexaoPadrao = 'padrao';

    /**
     * Construtor do DatabaseManager.
     *
     * @param array<string, array<string, mixed>> $configuracoes
     * @param string $conexaoPadrao
     */
    public function __construct(array $configuracoes = [], string $conexaoPadrao = 'padrao')
    {
        /** @var array<string, array{driver: string, host?: string, porta?: int|string, banco: string, usuario?: string, senha?: string, charset?: string, timezone?: string, opcoes?: array<int, mixed>}> $configuracoesTipadas */
        $configuracoesTipadas = $configuracoes;
        $this->configuracoes = $configuracoesTipadas;
        $this->conexaoPadrao = $conexaoPadrao;
    }

    /**
     * Adiciona ou atualiza uma configuração de conexão.
     *
     * @param string $nome
     * @param array{
     *     driver: string,
     *     host?: string,
     *     porta?: int|string,
     *     banco: string,
     *     usuario?: string,
     *     senha?: string,
     *     charset?: string,
     *     timezone?: string,
     *     opcoes?: array<int, mixed>
     * } $configuracao
     * @return static
     */
    public function adicionarConexao(string $nome, array $configuracao): static
    {
        $this->configuracoes[$nome] = $configuracao;
        unset($this->conexoesAtivas[$nome]);
        return $this;
    }

    /**
     * Obtém ou inicializa uma conexão PDO pelo nome configurado.
     *
     * @param string|null $nome
     * @return PDO
     * @throws InvalidArgumentException
     */
    public function conexao(?string $nome = null): PDO
    {
        $nomeConexao = $nome ?? $this->conexaoPadrao;

        if (isset($this->conexoesAtivas[$nomeConexao])) {
            return $this->conexoesAtivas[$nomeConexao];
        }

        if (!isset($this->configuracoes[$nomeConexao])) {
            throw new InvalidArgumentException("Conexão de banco de dados '{$nomeConexao}' não configurada.");
        }

        $pdo = ConexaoFactory::criar($this->configuracoes[$nomeConexao]);
        $this->conexoesAtivas[$nomeConexao] = $pdo;

        return $pdo;
    }

    /**
     * Inicia uma instância de QueryBuilder para uma tabela na conexão indicada.
     *
     * @param string $tabela
     * @param string|null $nomeConexao
     * @return QueryBuilder
     */
    public function tabela(string $tabela, ?string $nomeConexao = null): QueryBuilder
    {
        $pdo = $this->conexao($nomeConexao);
        $gramatica = $this->resolverGramatica($nomeConexao);

        return new QueryBuilder($pdo, $gramatica, $tabela);
    }

    /**
     * Inicia uma transação atômica na conexão indicada.
     *
     * @param string|null $nomeConexao
     * @return bool
     */
    public function iniciarTransacao(?string $nomeConexao = null): bool
    {
        return $this->conexao($nomeConexao)->beginTransaction();
    }

    /**
     * Confirma uma transação atômica na conexão indicada.
     *
     * @param string|null $nomeConexao
     * @return bool
     */
    public function confirmar(?string $nomeConexao = null): bool
    {
        return $this->conexao($nomeConexao)->commit();
    }

    /**
     * Reverte uma transação atômica na conexão indicada.
     *
     * @param string|null $nomeConexao
     * @return bool
     */
    public function reverter(?string $nomeConexao = null): bool
    {
        return $this->conexao($nomeConexao)->rollBack();
    }

    /**
     * Executa uma closure dentro de uma transação com commit e rollback automáticos.
     *
     * @template T
     * @param Closure(DatabaseManager): T $callback
     * @param string|null $nomeConexao
     * @return T
     * @throws Throwable
     */
    public function transacao(Closure $callback, ?string $nomeConexao = null): mixed
    {
        $this->iniciarTransacao($nomeConexao);

        try {
            $resultado = $callback($this);
            $this->confirmar($nomeConexao);
            return $resultado;
        } catch (Throwable $e) {
            $this->reverter($nomeConexao);
            throw $e;
        }
    }

    /**
     * Resolve a gramática apropriada para a conexão.
     *
     * @param string|null $nomeConexao
     * @return GramaticaInterface
     */
    protected function resolverGramatica(?string $nomeConexao = null): GramaticaInterface
    {
        $nome = $nomeConexao ?? $this->conexaoPadrao;
        $driver = strtolower($this->configuracoes[$nome]['driver'] ?? '');

        if ($driver === 'firebird') {
            return new GramaticaFirebird();
        }

        $delimitador = match ($driver) {
            'mysql' => '`',
            'sqlsrv' => '"',
            default => '"',
        };

        return new GramaticaPadrao($delimitador);
    }
}
