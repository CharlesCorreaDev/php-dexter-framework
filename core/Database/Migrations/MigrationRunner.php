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

use Dexter\Database\DatabaseManager;
use Dexter\Database\Schema\Blueprint;
use Dexter\Database\Schema\SchemaBuilder;
use PDO;
use RuntimeException;

/**
 * Executor de migrações (Migration Runner) do Dexter Framework.
 * Gerencia a tabela de controle interno `dexter_migracoes`.
 */
class MigrationRunner
{
    /**
     * @var string
     */
    protected const TABELA_MIGRACOES = 'dexter_migracoes';

    /**
     * @var SchemaBuilder
     */
    protected SchemaBuilder $schema;

    /**
     * @var PDO
     */
    protected PDO $pdo;

    /**
     * Construtor do MigrationRunner.
     *
     * @param DatabaseManager $db
     * @param string $caminhoMigracoes
     * @param string|null $nomeConexao
     * @param string $driver
     */
    public function __construct(
        protected readonly DatabaseManager $db,
        protected readonly string $caminhoMigracoes,
        protected readonly ?string $nomeConexao = null,
        protected readonly string $driver = 'sqlite'
    ) {
        $this->pdo = $this->db->conexao($this->nomeConexao);
        $this->schema = new SchemaBuilder($this->pdo, $this->driver);
        $this->garantirTabelaControle();
    }

    /**
     * Cria a tabela interna `dexter_migracoes` se ela ainda não existir.
     *
     * @return void
     */
    public function garantirTabelaControle(): void
    {
        $this->schema->criar(self::TABELA_MIGRACOES, function (Blueprint $table): void {
            $table->id('id');
            $table->string('migracao', 255);
            $table->inteiro('lote');
            $table->dataHora('executado_em');
        });
    }

    /**
     * Executa todas as migrações pendentes em um novo lote.
     *
     * @return array<int, string> Lista de arquivos executados
     */
    public function executarPendentes(): array
    {
        $arquivos = $this->obterArquivosMigracao();
        $executadas = $this->obterMigracoesExecutadas();
        $proximoLote = $this->obterUltimoLote() + 1;
        $executadasAgora = [];

        foreach ($arquivos as $arquivo) {
            $nomeBase = basename($arquivo, '.php');
            if (in_array($nomeBase, $executadas, true)) {
                continue;
            }

            $instancia = $this->instanciarMigracao($arquivo);
            $instancia->executar($this->schema);

            $this->db->tabela(self::TABELA_MIGRACOES, $this->nomeConexao)->inserir([
                'migracao' => $nomeBase,
                'lote' => $proximoLote,
                'executado_em' => date('Y-m-d H:i:s'),
            ]);

            $executadasAgora[] = $nomeBase;
        }

        return $executadasAgora;
    }

    /**
     * Reverte o último lote de migrações executadas.
     *
     * @return array<int, string> Lista de arquivos revertidos
     */
    public function reverterUltimoLote(): array
    {
        $ultimoLote = $this->obterUltimoLote();
        if ($ultimoLote === 0) {
            return [];
        }

        $registros = $this->db->tabela(self::TABELA_MIGRACOES, $this->nomeConexao)
            ->onde('lote', '=', $ultimoLote)
            ->ordenarPor('id', 'DESC')
            ->obter();

        $revertidas = [];

        foreach ($registros as $registro) {
            /** @var string $nomeBase */
            $nomeBase = $registro['migracao'];
            $caminhoArquivo = $this->caminhoMigracoes . '/' . $nomeBase . '.php';

            if (file_exists($caminhoArquivo)) {
                $instancia = $this->instanciarMigracao($caminhoArquivo);
                $instancia->reverter($this->schema);
            }

            $this->db->tabela(self::TABELA_MIGRACOES, $this->nomeConexao)
                ->onde('id', '=', $registro['id'])
                ->excluir();

            $revertidas[] = $nomeBase;
        }

        return $revertidas;
    }

    /**
     * Retorna a lista de status de todas as migrações encontradas.
     *
     * @return array<int, array{migracao: string, executada: bool, lote: int|null}>
     */
    public function obterStatus(): array
    {
        $arquivos = $this->obterArquivosMigracao();
        $registrosExecutados = $this->db->tabela(self::TABELA_MIGRACOES, $this->nomeConexao)->obter();

        $mapaLotes = [];
        foreach ($registrosExecutados as $reg) {
            /** @var string $migracao */
            $migracao = $reg['migracao'];
            /** @var int $lote */
            $lote = $reg['lote'];
            $mapaLotes[$migracao] = (int) $lote;
        }

        $status = [];
        foreach ($arquivos as $arquivo) {
            $nomeBase = basename($arquivo, '.php');
            $executada = isset($mapaLotes[$nomeBase]);

            $status[] = [
                'migracao' => $nomeBase,
                'executada' => $executada,
                'lote' => $mapaLotes[$nomeBase] ?? null,
            ];
        }

        return $status;
    }

    /**
     * Retorna todos os nomes de migrações já registradas no banco.
     *
     * @return array<int, string>
     */
    protected function obterMigracoesExecutadas(): array
    {
        $registros = $this->db->tabela(self::TABELA_MIGRACOES, $this->nomeConexao)->campos(['migracao'])->obter();
        $retorno = [];
        foreach ($registros as $reg) {
            /** @var string $nome */
            $nome = $reg['migracao'];
            $retorno[] = $nome;
        }
        return $retorno;
    }

    /**
     * Retorna o número do último lote executado.
     *
     * @return int
     */
    protected function obterUltimoLote(): int
    {
        $registro = $this->db->tabela(self::TABELA_MIGRACOES, $this->nomeConexao)
            ->campos(['lote'])
            ->ordenarPor('lote', 'DESC')
            ->primeiro();

        return $registro !== null ? (int) $registro['lote'] : 0;
    }

    /**
     * Lista todos os arquivos de migração ordenados alfabeticamente.
     *
     * @return array<int, string>
     */
    protected function obterArquivosMigracao(): array
    {
        if (!is_dir($this->caminhoMigracoes)) {
            return [];
        }

        $arquivos = glob($this->caminhoMigracoes . '/*.php');
        if ($arquivos === false) {
            return [];
        }

        sort($arquivos);
        return $arquivos;
    }

    /**
     * Instancia dinamicamente o objeto de migração a partir do arquivo.
     *
     * @param string $caminhoArquivo
     * @return Migracao
     * @throws RuntimeException
     */
    protected function instanciarMigracao(string $caminhoArquivo): Migracao
    {
        $classesAntes = get_declared_classes();
        require_once $caminhoArquivo;
        $classesDepois = get_declared_classes();

        $novasClasses = array_diff($classesDepois, $classesAntes);

        foreach ($novasClasses as $classe) {
            if (is_subclass_of($classe, Migracao::class)) {
                return new $classe();
            }
        }

        $nomeArquivo = basename($caminhoArquivo, '.php');
        $partes = explode('_', $nomeArquivo);
        while (!empty($partes) && is_numeric($partes[0])) {
            array_shift($partes);
        }
        $sufixo = str_replace(' ', '', ucwords(implode(' ', $partes)));

        foreach (get_declared_classes() as $classe) {
            $nomeClasseLimpo = str_contains($classe, '\\') ? substr($classe, strrpos($classe, '\\') + 1) : $classe;
            if (strcasecmp($nomeClasseLimpo, $sufixo) === 0 && is_subclass_of($classe, Migracao::class)) {
                return new $classe();
            }
        }

        throw new RuntimeException("Nenhuma classe herdeira de Migracao encontrada no arquivo: {$caminhoArquivo}");
    }
}
