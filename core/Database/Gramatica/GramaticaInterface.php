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

namespace Dexter\Database\Gramatica;

/**
 * Interface para compiladores de dialetos SQL.
 */
interface GramaticaInterface
{
    /**
     * Compila instrução SELECT.
     *
     * @param string $tabela
     * @param array<int, string> $campos
     * @param array<int, array{coluna: string, operador: string, valor: mixed, booleano: string}> $condicoes
     * @param array<int, array{
     *     tabela: string,
     *     primeira: string,
     *     operador: string,
     *     segunda: string,
     *     tipo: string
     * }> $juncoes
     * @param array<int, array{coluna: string, direcao: string}> $ordenacoes
     * @param int|null $limite
     * @param int|null $deslocamento
     * @return string
     */
    public function compilarSelect(
        string $tabela,
        array $campos,
        array $condicoes,
        array $juncoes,
        array $ordenacoes,
        ?int $limite,
        ?int $deslocamento
    ): string;

    /**
     * Compila instrução INSERT.
     *
     * @param string $tabela
     * @param array<string, mixed> $valores
     * @return string
     */
    public function compilarInsert(string $tabela, array $valores): string;

    /**
     * Compila instrução UPDATE.
     *
     * @param string $tabela
     * @param array<string, mixed> $valores
     * @param array<int, array{coluna: string, operador: string, valor: mixed, booleano: string}> $condicoes
     * @return string
     */
    public function compilarUpdate(string $tabela, array $valores, array $condicoes): string;

    /**
     * Compila instrução DELETE.
     *
     * @param string $tabela
     * @param array<int, array{coluna: string, operador: string, valor: mixed, booleano: string}> $condicoes
     * @return string
     */
    public function compilarDelete(string $tabela, array $condicoes): string;

    /**
     * Envolve identificador com aspas apropriadas para o dialeto.
     *
     * @param string $identificador
     * @return string
     */
    public function envolverIdentificador(string $identificador): string;
}
