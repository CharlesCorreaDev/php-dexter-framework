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

use Closure;
use PDO;

/**
 * Construtor e executor de esquema de banco de dados (Schema Builder).
 */
class SchemaBuilder
{
    /**
     * Construtor do SchemaBuilder.
     *
     * @param PDO $pdo
     * @param string $driver
     */
    public function __construct(
        protected readonly PDO $pdo,
        protected readonly string $driver = 'sqlite'
    ) {
    }

    /**
     * Cria uma nova tabela com a definição do blueprint.
     *
     * @param string $tabela
     * @param Closure(Blueprint): void $callback
     * @return void
     */
    public function criar(string $tabela, Closure $callback): void
    {
        $blueprint = new Blueprint($tabela);
        $callback($blueprint);

        $sql = $blueprint->paraSql($this->driver);
        $this->pdo->exec($sql);
    }

    /**
     * Remove uma tabela se existir.
     *
     * @param string $tabela
     * @return void
     */
    public function derrubarSeExiste(string $tabela): void
    {
        $quote = $this->driver === 'mysql' ? '`' : '"';
        $sql = "DROP TABLE IF EXISTS {$quote}{$tabela}{$quote}";
        $this->pdo->exec($sql);
    }

    /**
     * Verifica se uma tabela existe no banco de dados.
     *
     * @param string $tabela
     * @return bool
     */
    public function temTabela(string $tabela): bool
    {
        if ($this->driver === 'sqlite') {
            $stmt = $this->pdo->prepare("SELECT name FROM sqlite_master WHERE type='table' AND name = ?");
            $stmt->execute([$tabela]);
            return $stmt->fetch() !== false;
        }

        if ($this->driver === 'mysql') {
            $stmt = $this->pdo->prepare("SHOW TABLES LIKE ?");
            $stmt->execute([$tabela]);
            return $stmt->fetch() !== false;
        }

        if (in_array($this->driver, ['pgsql', 'postgres', 'postgresql'], true)) {
            $stmt = $this->pdo->prepare(
                "SELECT table_name FROM information_schema.tables WHERE table_name = ? AND table_schema = 'public'"
            );
            $stmt->execute([$tabela]);
            return $stmt->fetch() !== false;
        }

        return false;
    }
}
