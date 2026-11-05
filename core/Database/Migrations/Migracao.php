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

namespace Dexter\Database\Migrations;

use Dexter\Database\Schema\SchemaBuilder;

/**
 * Classe base abstrata para todas as migrações do Dexter Framework.
 */
abstract class Migracao
{
    /**
     * Executa as alterações de esquema da migração.
     *
     * @param SchemaBuilder $schema
     * @return void
     */
    abstract public function executar(SchemaBuilder $schema): void;

    /**
     * Reverte as alterações de esquema da migração.
     *
     * @param SchemaBuilder $schema
     * @return void
     */
    abstract public function reverter(SchemaBuilder $schema): void;
}
