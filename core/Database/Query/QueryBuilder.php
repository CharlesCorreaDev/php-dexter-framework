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

namespace Dexter\Database\Query;

use Dexter\Database\Gramatica\GramaticaInterface;
use PDO;
use PDOStatement;

/**
 * Fluent Query Builder orientado a objetos com suporte a múltiplos dialetos SQL e Prepared Statements.
 */
class QueryBuilder
{
    /**
     * @var string
     */
    protected string $tabela = '';

    /**
     * @var array<int, string>
     */
    protected array $campos = [];

    /**
     * @var array<int, array{coluna: string, operador: string, valor: mixed, booleano: string}>
     */
    protected array $condicoes = [];

    /**
     * @var array<int, array{tabela: string, primeira: string, operador: string, segunda: string, tipo: string}>
     */
    protected array $juncoes = [];

    /**
     * @var array<int, array{coluna: string, direcao: string}>
     */
    protected array $ordenacoes = [];

    /**
     * @var int|null
     */
    protected ?int $limite = null;

    /**
     * @var int|null
     */
    protected ?int $deslocamento = null;

    /**
     * Construtor do QueryBuilder.
     *
     * @param PDO $pdo
     * @param GramaticaInterface $gramatica
     * @param string $tabela
     */
    public function __construct(
        protected readonly PDO $pdo,
        protected readonly GramaticaInterface $gramatica,
        string $tabela = ''
    ) {
        $this->tabela = $tabela;
    }

    /**
     * Define a tabela da consulta.
     *
     * @param string $tabela
     * @return static
     */
    public function tabela(string $tabela): static
    {
        $this->tabela = $tabela;
        return $this;
    }

    /**
     * Define os campos a serem selecionados.
     *
     * @param array<int, string>|string $campos
     * @return static
     */
    public function campos(array|string $campos): static
    {
        $this->campos = is_array($campos) ? $campos : [$campos];
        return $this;
    }

    /**
     * Adiciona cláusula WHERE.
     *
     * @param string $coluna
     * @param mixed $operadorOuValor
     * @param mixed $valor
     * @param string $booleano
     * @return static
     */
    public function onde(
        string $coluna,
        mixed $operadorOuValor = null,
        mixed $valor = null,
        string $booleano = 'AND'
    ): static {
        if ($valor === null && $operadorOuValor !== null) {
            $valor = $operadorOuValor;
            $operador = '=';
        } else {
            $operador = is_string($operadorOuValor) ? $operadorOuValor : '=';
        }

        $this->condicoes[] = [
            'coluna' => $coluna,
            'operador' => $operador,
            'valor' => $valor,
            'booleano' => $booleano,
        ];

        return $this;
    }

    /**
     * Adiciona cláusula WHERE com operador OR.
     *
     * @param string $coluna
     * @param mixed $operadorOuValor
     * @param mixed $valor
     * @return static
     */
    public function ouOnde(string $coluna, mixed $operadorOuValor = null, mixed $valor = null): static
    {
        return $this->onde($coluna, $operadorOuValor, $valor, 'OR');
    }

    /**
     * Adiciona cláusula WHERE nulo.
     *
     * @param string $coluna
     * @param string $booleano
     * @return static
     */
    public function ondeNulo(string $coluna, string $booleano = 'AND'): static
    {
        $this->condicoes[] = [
            'coluna' => $coluna,
            'operador' => 'IS NULL',
            'valor' => null,
            'booleano' => $booleano,
        ];

        return $this;
    }

    /**
     * Adiciona cláusula WHERE não nulo.
     *
     * @param string $coluna
     * @param string $booleano
     * @return static
     */
    public function ondeNaoNulo(string $coluna, string $booleano = 'AND'): static
    {
        $this->condicoes[] = [
            'coluna' => $coluna,
            'operador' => 'IS NOT NULL',
            'valor' => null,
            'booleano' => $booleano,
        ];

        return $this;
    }

    /**
     * Adiciona cláusula WHERE IN.
     *
     * @param string $coluna
     * @param array<int, mixed> $valores
     * @param string $booleano
     * @return static
     */
    public function ondeEm(string $coluna, array $valores, string $booleano = 'AND'): static
    {
        $this->condicoes[] = [
            'coluna' => $coluna,
            'operador' => 'IN',
            'valor' => $valores,
            'booleano' => $booleano,
        ];

        return $this;
    }

    /**
     * Adiciona cláusula JOIN padrão (INNER JOIN).
     *
     * @param string $tabela
     * @param string $primeira
     * @param string $operador
     * @param string $segunda
     * @param string $tipo
     * @return static
     */
    public function juntar(
        string $tabela,
        string $primeira,
        string $operador,
        string $segunda,
        string $tipo = 'INNER'
    ): static {
        $this->juncoes[] = [
            'tabela' => $tabela,
            'primeira' => $primeira,
            'operador' => $operador,
            'segunda' => $segunda,
            'tipo' => $tipo,
        ];

        return $this;
    }

    /**
     * Adiciona cláusula LEFT JOIN.
     *
     * @param string $tabela
     * @param string $primeira
     * @param string $operador
     * @param string $segunda
     * @return static
     */
    public function juntarEsquerda(string $tabela, string $primeira, string $operador, string $segunda): static
    {
        return $this->juntar($tabela, $primeira, $operador, $segunda, 'LEFT');
    }

    /**
     * Adiciona cláusula ORDER BY.
     *
     * @param string $coluna
     * @param string $direcao
     * @return static
     */
    public function ordenarPor(string $coluna, string $direcao = 'ASC'): static
    {
        $this->ordenacoes[] = [
            'coluna' => $coluna,
            'direcao' => strtoupper($direcao) === 'DESC' ? 'DESC' : 'ASC',
        ];

        return $this;
    }

    /**
     * Define o limite de registros retornados.
     *
     * @param int $limite
     * @return static
     */
    public function limite(int $limite): static
    {
        $this->limite = $limite;
        return $this;
    }

    /**
     * Define o deslocamento (offset) da consulta.
     *
     * @param int $deslocamento
     * @return static
     */
    public function deslocamento(int $deslocamento): static
    {
        $this->deslocamento = $deslocamento;
        return $this;
    }

    /**
     * Retorna a string SQL compilada do SELECT.
     *
     * @return string
     */
    public function paraSql(): string
    {
        return $this->gramatica->compilarSelect(
            $this->tabela,
            $this->campos,
            $this->condicoes,
            $this->juncoes,
            $this->ordenacoes,
            $this->limite,
            $this->deslocamento
        );
    }

    /**
     * Retorna todos os valores de parâmetros das condições para o Prepared Statement.
     *
     * @return array<int, mixed>
     */
    public function obterParametros(): array
    {
        $parametros = [];
        foreach ($this->condicoes as $condicao) {
            $operador = strtoupper($condicao['operador']);
            if ($operador === 'IS NULL' || $operador === 'IS NOT NULL') {
                continue;
            }

            if ($operador === 'IN' || $operador === 'NOT IN') {
                $valores = is_array($condicao['valor']) ? $condicao['valor'] : [$condicao['valor']];
                foreach ($valores as $v) {
                    $parametros[] = $v;
                }
            } else {
                $parametros[] = $condicao['valor'];
            }
        }

        return $parametros;
    }

    /**
     * Executa a consulta SELECT e retorna todos os resultados como array de arrays associativos.
     *
     * @return array<int, array<string, mixed>>
     */
    public function obter(): array
    {
        $stmt = $this->executarConsulta($this->paraSql(), $this->obterParametros());
        /** @var array<int, array<string, mixed>> $resultados */
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    /**
     * Executa a consulta SELECT e retorna o primeiro registro ou null.
     *
     * @return array<string, mixed>|null
     */
    public function primeiro(): ?array
    {
        $this->limite(1);
        $stmt = $this->executarConsulta($this->paraSql(), $this->obterParametros());
        /** @var array<string, mixed>|false $resultado */
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado !== false ? $resultado : null;
    }

    /**
     * Retorna o total de registros que satisfazem as condições.
     *
     * @param string $campo
     * @return int
     */
    public function contar(string $campo = '*'): int
    {
        $copiaCampos = $this->campos;
        $this->campos = ["COUNT({$campo}) as total_registros"];
        $stmt = $this->executarConsulta($this->paraSql(), $this->obterParametros());
        $this->campos = $copiaCampos;

        /** @var array<string, mixed>|false $resultado */
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return (int) ($resultado['total_registros'] ?? 0);
    }

    /**
     * Insere um novo registro na tabela e retorna o último ID gerado ou boolean.
     *
     * @param array<string, mixed> $valores
     * @return int|string|bool
     */
    public function inserir(array $valores): int|string|bool
    {
        $sql = $this->gramatica->compilarInsert($this->tabela, $valores);
        $parametros = array_values($valores);

        $this->executarConsulta($sql, $parametros);

        $ultimoId = $this->pdo->lastInsertId();
        return $ultimoId !== false && $ultimoId !== '0' && $ultimoId !== '' ? $ultimoId : true;
    }

    /**
     * Atualiza registros da tabela com base nas condições e retorna o total de linhas afetadas.
     *
     * @param array<string, mixed> $valores
     * @return int
     */
    public function atualizar(array $valores): int
    {
        $sql = $this->gramatica->compilarUpdate($this->tabela, $valores, $this->condicoes);
        $parametros = array_merge(array_values($valores), $this->obterParametros());

        $stmt = $this->executarConsulta($sql, $parametros);
        return $stmt->rowCount();
    }

    /**
     * Exclui registros da tabela com base nas condições e retorna o total de linhas afetadas.
     *
     * @return int
     */
    public function excluir(): int
    {
        $sql = $this->gramatica->compilarDelete($this->tabela, $this->condicoes);
        $parametros = $this->obterParametros();

        $stmt = $this->executarConsulta($sql, $parametros);
        return $stmt->rowCount();
    }

    /**
     * Executa a query preparada via PDO.
     *
     * @param string $sql
     * @param array<int, mixed> $parametros
     * @return PDOStatement
     */
    protected function executarConsulta(string $sql, array $parametros = []): PDOStatement
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($parametros);
        return $stmt;
    }
}

