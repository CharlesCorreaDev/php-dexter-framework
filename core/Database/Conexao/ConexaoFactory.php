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

namespace Dexter\Database\Conexao;

use InvalidArgumentException;
use PDO;

/**
 * Fábrica responsável por instanciar conexões PDO com segurança e fuso horário padronizado.
 */
class ConexaoFactory
{
    /**
     * Opções de conexão PDO padrão para todos os drivers.
     *
     * @var array<int, mixed>
     */
    protected const OPCOES_PADRAO = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    /**
     * Cria e retorna uma nova instância de conexão PDO.
     *
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
     * @return PDO
     * @throws InvalidArgumentException
     */
    public static function criar(array $configuracao): PDO
    {
        $driver = strtolower($configuracao['driver']);
        $usuario = $configuracao['usuario'] ?? null;
        $senha = $configuracao['senha'] ?? null;
        $opcoesExtras = $configuracao['opcoes'] ?? [];
        $opcoes = self::OPCOES_PADRAO + $opcoesExtras;

        $dsn = match ($driver) {
            'sqlite' => self::construirDsnSqlite($configuracao),
            'mysql' => self::construirDsnMysql($configuracao),
            'pgsql', 'postgres', 'postgresql' => self::construirDsnPgsql($configuracao),
            'sqlsrv' => self::construirDsnSqlsrv($configuracao),
            'firebird' => self::construirDsnFirebird($configuracao),
            default => throw new InvalidArgumentException("Driver de banco de dados não suportado: '{$driver}'"),
        };

        $pdo = new PDO($dsn, $usuario, $senha, $opcoes);

        self::aplicarConfiguracoesIniciais($pdo, $driver, $configuracao['timezone'] ?? '-03:00');

        return $pdo;
    }

    /**
     * Constrói DSN para SQLite.
     *
     * @param array{banco: string} $config
     * @return string
     */
    protected static function construirDsnSqlite(array $config): string
    {
        return 'sqlite:' . $config['banco'];
    }

    /**
     * Constrói DSN para MySQL.
     *
     * @param array{host?: string, porta?: int|string, banco: string, charset?: string} $config
     * @return string
     */
    protected static function construirDsnMysql(array $config): string
    {
        $host = $config['host'] ?? '127.0.0.1';
        $porta = $config['porta'] ?? 3306;
        $banco = $config['banco'];
        $charset = $config['charset'] ?? 'utf8mb4';

        return "mysql:host={$host};port={$porta};dbname={$banco};charset={$charset}";
    }

    /**
     * Constrói DSN para PostgreSQL.
     *
     * @param array{host?: string, porta?: int|string, banco: string} $config
     * @return string
     */
    protected static function construirDsnPgsql(array $config): string
    {
        $host = $config['host'] ?? '127.0.0.1';
        $porta = $config['porta'] ?? 5432;
        $banco = $config['banco'];

        return "pgsql:host={$host};port={$porta};dbname={$banco}";
    }

    /**
     * Constrói DSN para SQL Server.
     *
     * @param array{host?: string, porta?: int|string, banco: string} $config
     * @return string
     */
    protected static function construirDsnSqlsrv(array $config): string
    {
        $host = $config['host'] ?? '127.0.0.1';
        $porta = isset($config['porta']) ? ',' . $config['porta'] : '';
        $banco = $config['banco'];

        return "sqlsrv:Server={$host}{$porta};Database={$banco}";
    }

    /**
     * Constrói DSN para Firebird.
     *
     * @param array{host?: string, porta?: int|string, banco: string, charset?: string} $config
     * @return string
     */
    protected static function construirDsnFirebird(array $config): string
    {
        $host = $config['host'] ?? null;
        $porta = isset($config['porta']) ? '/' . $config['porta'] : '';
        $banco = $config['banco'];
        $charset = $config['charset'] ?? 'UTF8';

        $caminhoBanco = $host !== null ? "{$host}{$porta}:{$banco}" : $banco;

        return "firebird:dbname={$caminhoBanco};charset={$charset}";
    }

    /**
     * Aplica configurações iniciais como fuso horário de Brasília (-03:00) ao conectar.
     *
     * @param PDO $pdo
     * @param string $driver
     * @param string $timezone
     * @return void
     */
    protected static function aplicarConfiguracoesIniciais(PDO $pdo, string $driver, string $timezone): void
    {
        if ($driver === 'mysql') {
            $pdo->exec("SET time_zone = '{$timezone}'");
        } elseif (in_array($driver, ['pgsql', 'postgres', 'postgresql'], true)) {
            $pdo->exec("SET timezone TO 'America/Sao_Paulo'");
        }
    }
}
