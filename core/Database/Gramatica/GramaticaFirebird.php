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
 * Gramática específica para Firebird 2.5/3.0/4.0/5.0.
 * Suporta FIRST/SKIP e ROWS para paginação e delimitadores de identificadores.
 */
class GramaticaFirebird extends GramaticaPadrao
{
    /**
     * @var string
     */
    protected string $delimitador = '"';

    /**
     * Construtor da gramática Firebird.
     */
    public function __construct()
    {
        parent::__construct('"');
    }

    /**
     * {@inheritDoc}
     */
    public function compilarSelect(
        string $tabela,
        array $campos,
        array $condicoes,
        array $juncoes,
        array $ordenacoes,
        ?int $limite,
        ?int $deslocamento
    ): string {
        $prefixoPaginacao = '';
        if ($limite !== null) {
            $prefixoPaginacao = $deslocamento !== null
                ? "FIRST {$limite} SKIP {$deslocamento} "
                : "FIRST {$limite} ";
        } elseif ($deslocamento !== null) {
            $prefixoPaginacao = "SKIP {$deslocamento} ";
        }

        $listaCampos = empty($campos) ? '*' : implode(', ', array_map([$this, 'envolverIdentificador'], $campos));
        $sql = "SELECT {$prefixoPaginacao}{$listaCampos} FROM " . $this->envolverIdentificador($tabela);

        if (!empty($juncoes)) {
            $sql .= ' ' . $this->compilarJuncoes($juncoes);
        }

        if (!empty($condicoes)) {
            $sql .= ' WHERE ' . $this->compilarCondicoes($condicoes);
        }

        if (!empty($ordenacoes)) {
            $sql .= ' ORDER BY ' . $this->compilarOrdenacoes($ordenacoes);
        }

        return $sql;
    }
}
