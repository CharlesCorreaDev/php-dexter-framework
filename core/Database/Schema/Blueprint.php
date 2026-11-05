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

namespace Dexter\Database\Schema;

/**
 * Construtor fluente para definição de estrutura de tabelas e colunas (Schema Builder).
 */
class Blueprint
{
    /**
     * @var array<int, array{
     *     nome: string,
     *     tipo: string,
     *     tamanho?: int,
     *     nulo: bool,
     *     padrao?: mixed,
     *     auto_incremento: bool,
     *     chave_primaria: bool
     * }>
     */
    protected array $colunas = [];

    /**
     * @var array<int, string>
     */
    protected array $chavesPrimarias = [];

    /**
     * Construtor da Blueprint.
     *
     * @param string $tabela
     */
    public function __construct(protected readonly string $tabela)
    {
    }

    /**
     * Adiciona coluna de identificador numérico auto-incremental (chave primária).
     *
     * @param string $nome
     * @return static
     */
    public function id(string $nome = 'id'): static
    {
        $this->colunas[] = [
            'nome' => $nome,
            'tipo' => 'INTEGER',
            'nulo' => false,
            'auto_incremento' => true,
            'chave_primaria' => true,
        ];
        $this->chavesPrimarias[] = $nome;
        return $this;
    }

    /**
     * Adiciona coluna string/varchar.
     *
     * @param string $nome
     * @param int $tamanho
     * @param bool $nulo
     * @return static
     */
    public function string(string $nome, int $tamanho = 255, bool $nulo = false): static
    {
        $this->colunas[] = [
            'nome' => $nome,
            'tipo' => 'VARCHAR',
            'tamanho' => $tamanho,
            'nulo' => $nulo,
            'auto_incremento' => false,
            'chave_primaria' => false,
        ];
        return $this;
    }

    /**
     * Adiciona coluna texto longo.
     *
     * @param string $nome
     * @param bool $nulo
     * @return static
     */
    public function texto(string $nome, bool $nulo = false): static
    {
        $this->colunas[] = [
            'nome' => $nome,
            'tipo' => 'TEXT',
            'nulo' => $nulo,
            'auto_incremento' => false,
            'chave_primaria' => false,
        ];
        return $this;
    }

    /**
     * Adiciona coluna inteira.
     *
     * @param string $nome
     * @param bool $nulo
     * @return static
     */
    public function inteiro(string $nome, bool $nulo = false): static
    {
        $this->colunas[] = [
            'nome' => $nome,
            'tipo' => 'INTEGER',
            'nulo' => $nulo,
            'auto_incremento' => false,
            'chave_primaria' => false,
        ];
        return $this;
    }

    /**
     * Adiciona coluna booleana.
     *
     * @param string $nome
     * @param bool $nulo
     * @param bool $padrao
     * @return static
     */
    public function booleano(string $nome, bool $nulo = false, bool $padrao = false): static
    {
        $this->colunas[] = [
            'nome' => $nome,
            'tipo' => 'BOOLEAN',
            'nulo' => $nulo,
            'padrao' => $padrao ? 1 : 0,
            'auto_incremento' => false,
            'chave_primaria' => false,
        ];
        return $this;
    }

    /**
     * Adiciona coluna de data e hora.
     *
     * @param string $nome
     * @param bool $nulo
     * @return static
     */
    public function dataHora(string $nome, bool $nulo = false): static
    {
        $this->colunas[] = [
            'nome' => $nome,
            'tipo' => 'DATETIME',
            'nulo' => $nulo,
            'auto_incremento' => false,
            'chave_primaria' => false,
        ];
        return $this;
    }

    /**
     * Adiciona colunas padrão criado_em e atualizado_em.
     *
     * @return static
     */
    public function timestamps(): static
    {
        $this->dataHora('criado_em', false);
        $this->dataHora('atualizado_em', true);
        return $this;
    }

    /**
     * Retorna a lista de colunas definidas.
     *
     * @return array<int, array{
     *     nome: string,
     *     tipo: string,
     *     tamanho?: int,
     *     nulo: bool,
     *     padrao?: mixed,
     *     auto_incremento: bool,
     *     chave_primaria: bool
     * }>
     */
    public function obterColunas(): array
    {
        return $this->colunas;
    }

    /**
     * Retorna o nome da tabela.
     *
     * @return string
     */
    public function obterTabela(): string
    {
        return $this->tabela;
    }

    /**
     * Compila instrução SQL CREATE TABLE compatível com o driver indicado.
     *
     * @param string $driver
     * @return string
     */
    public function paraSql(string $driver = 'sqlite'): string
    {
        $definicoes = [];

        foreach ($this->colunas as $coluna) {
            $nome = $coluna['nome'];
            $tipo = $coluna['tipo'];

            if ($driver === 'sqlite') {
                if ($coluna['auto_incremento']) {
                    $definicoes[] = "\"{$nome}\" INTEGER PRIMARY KEY AUTOINCREMENT";
                    continue;
                }
            } elseif ($driver === 'mysql') {
                if ($coluna['auto_incremento']) {
                    $definicoes[] = "`{$nome}` INT AUTO_INCREMENT PRIMARY KEY";
                    continue;
                }
            } elseif (in_array($driver, ['pgsql', 'postgres', 'postgresql'], true)) {
                if ($coluna['auto_incremento']) {
                    $definicoes[] = "\"{$nome}\" SERIAL PRIMARY KEY";
                    continue;
                }
            }

            $sqlTipo = match ($tipo) {
                'VARCHAR' => "VARCHAR(" . ($coluna['tamanho'] ?? 255) . ")",
                'TEXT' => 'TEXT',
                'INTEGER' => 'INTEGER',
                'BOOLEAN' => $driver === 'sqlite' ? 'INTEGER' : 'BOOLEAN',
                'DATETIME' => $driver === 'sqlite' ? 'TEXT' : 'DATETIME',
                default => 'VARCHAR(255)',
            };

            $sqlNulo = $coluna['nulo'] ? 'NULL' : 'NOT NULL';
            $sqlPadrao = isset($coluna['padrao']) ? " DEFAULT '{$coluna['padrao']}'" : '';

            $quote = $driver === 'mysql' ? '`' : '"';
            $definicoes[] = "{$quote}{$nome}{$quote} {$sqlTipo} {$sqlNulo}{$sqlPadrao}";
        }

        $quoteTabela = $driver === 'mysql' ? "`{$this->tabela}`" : "\"{$this->tabela}\"";
        return "CREATE TABLE IF NOT EXISTS {$quoteTabela} (\n    " . implode(",\n    ", $definicoes) . "\n)";
    }
}
