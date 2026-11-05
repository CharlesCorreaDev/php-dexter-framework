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
 * Gramática padrão ANSI/MySQL/PostgreSQL/SQLite.
 */
class GramaticaPadrao implements GramaticaInterface
{
    /**
     * @var string
     */
    protected string $delimitador = '"';

    /**
     * Construtor da gramática.
     *
     * @param string $delimitador
     */
    public function __construct(string $delimitador = '"')
    {
        $this->delimitador = $delimitador;
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
        $listaCampos = empty($campos) ? '*' : implode(', ', array_map([$this, 'envolverIdentificador'], $campos));
        $sql = "SELECT {$listaCampos} FROM " . $this->envolverIdentificador($tabela);

        if (!empty($juncoes)) {
            $sql .= ' ' . $this->compilarJuncoes($juncoes);
        }

        if (!empty($condicoes)) {
            $sql .= ' WHERE ' . $this->compilarCondicoes($condicoes);
        }

        if (!empty($ordenacoes)) {
            $sql .= ' ORDER BY ' . $this->compilarOrdenacoes($ordenacoes);
        }

        if ($limite !== null) {
            $sql .= " LIMIT {$limite}";
        }

        if ($deslocamento !== null) {
            $sql .= " OFFSET {$deslocamento}";
        }

        return $sql;
    }

    /**
     * {@inheritDoc}
     */
    public function compilarInsert(string $tabela, array $valores): string
    {
        $colunas = array_keys($valores);
        $camposEnvolvidos = implode(', ', array_map([$this, 'envolverIdentificador'], $colunas));
        $placeholders = implode(', ', array_fill(0, count($colunas), '?'));

        return "INSERT INTO " . $this->envolverIdentificador($tabela) .
            " ({$camposEnvolvidos}) VALUES ({$placeholders})";
    }

    /**
     * {@inheritDoc}
     */
    public function compilarUpdate(string $tabela, array $valores, array $condicoes): string
    {
        $set = [];
        foreach (array_keys($valores) as $coluna) {
            $set[] = $this->envolverIdentificador($coluna) . ' = ?';
        }

        $sql = "UPDATE " . $this->envolverIdentificador($tabela) . " SET " . implode(', ', $set);

        if (!empty($condicoes)) {
            $sql .= ' WHERE ' . $this->compilarCondicoes($condicoes);
        }

        return $sql;
    }

    /**
     * {@inheritDoc}
     */
    public function compilarDelete(string $tabela, array $condicoes): string
    {
        $sql = "DELETE FROM " . $this->envolverIdentificador($tabela);

        if (!empty($condicoes)) {
            $sql .= ' WHERE ' . $this->compilarCondicoes($condicoes);
        }

        return $sql;
    }

    /**
     * {@inheritDoc}
     */
    public function envolverIdentificador(string $identificador): string
    {
        if ($identificador === '*') {
            return '*';
        }

        if (stripos($identificador, ' as ') !== false) {
            $partes = preg_split('/\s+as\s+/i', $identificador);
            if ($partes !== false && count($partes) === 2) {
                return $this->envolverIdentificador($partes[0]) . ' AS ' . $this->envolverIdentificador($partes[1]);
            }
        }

        if (str_contains($identificador, '(') && str_contains($identificador, ')')) {
            return $identificador;
        }

        if (str_contains($identificador, '.')) {
            $partes = explode('.', $identificador);
            return implode('.', array_map([$this, 'envolverIdentificador'], $partes));
        }

        return $this->delimitador . str_replace($this->delimitador, '', $identificador) . $this->delimitador;
    }

    /**
     * Compila junções (JOINs).
     *
     * @param array<int, array{
     *     tabela: string,
     *     primeira: string,
     *     operador: string,
     *     segunda: string,
     *     tipo: string
     * }> $juncoes
     * @return string
     */
    protected function compilarJuncoes(array $juncoes): string
    {
        $partes = [];
        foreach ($juncoes as $juncao) {
            $tipo = strtoupper($juncao['tipo']);
            $tabela = $this->envolverIdentificador($juncao['tabela']);
            $primeira = $this->envolverIdentificador($juncao['primeira']);
            $segunda = $this->envolverIdentificador($juncao['segunda']);
            $operador = $juncao['operador'];

            $partes[] = "{$tipo} JOIN {$tabela} ON {$primeira} {$operador} {$segunda}";
        }

        return implode(' ', $partes);
    }

    /**
     * Compila cláusulas WHERE.
     *
     * @param array<int, array{coluna: string, operador: string, valor: mixed, booleano: string}> $condicoes
     * @return string
     */
    protected function compilarCondicoes(array $condicoes): string
    {
        $partes = [];
        foreach ($condicoes as $indice => $condicao) {
            $booleano = $indice === 0 ? '' : strtoupper($condicao['booleano']) . ' ';
            $coluna = $this->envolverIdentificador($condicao['coluna']);
            $operador = strtoupper($condicao['operador']);

            if ($operador === 'IS NULL' || $operador === 'IS NOT NULL') {
                $partes[] = "{$booleano}{$coluna} {$operador}";
            } elseif ($operador === 'IN' || $operador === 'NOT IN') {
                $valores = is_array($condicao['valor']) ? $condicao['valor'] : [$condicao['valor']];
                $placeholders = implode(', ', array_fill(0, count($valores), '?'));
                $partes[] = "{$booleano}{$coluna} {$operador} ({$placeholders})";
            } else {
                $partes[] = "{$booleano}{$coluna} {$operador} ?";
            }
        }

        return implode(' ', $partes);
    }

    /**
     * Compila cláusulas ORDER BY.
     *
     * @param array<int, array{coluna: string, direcao: string}> $ordenacoes
     * @return string
     */
    protected function compilarOrdenacoes(array $ordenacoes): string
    {
        $partes = [];
        foreach ($ordenacoes as $ordem) {
            $coluna = $this->envolverIdentificador($ordem['coluna']);
            $direcao = strtoupper($ordem['direcao']) === 'DESC' ? 'DESC' : 'ASC';
            $partes[] = "{$coluna} {$direcao}";
        }

        return implode(', ', $partes);
    }
}
