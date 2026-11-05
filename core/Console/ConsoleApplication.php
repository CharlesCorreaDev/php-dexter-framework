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

namespace Dexter\Console;

use Dexter\Database\DatabaseManager;
use Dexter\Database\Migrations\MigrationRunner;
use Throwable;

/**
 * Console CLI do Dexter Framework.
 * Executa comandos utilitários como migrações, status e operações de manutenção.
 */
class ConsoleApplication
{
    /**
     * Construtor da aplicação de console.
     *
     * @param DatabaseManager $db
     * @param string $caminhoMigracoes
     */
    public function __construct(
        protected readonly DatabaseManager $db,
        protected readonly string $caminhoMigracoes
    ) {
    }

    /**
     * Executa a linha de comando com base nos argumentos passados ($argv).
     *
     * @param array<int, string> $argumentos
     * @return int Código de saída (0 sucesso, 1 erro)
     */
    public function executar(array $argumentos): int
    {
        $comando = $argumentos[1] ?? 'ajuda';

        try {
            return match ($comando) {
                'migrar' => $this->comandoMigrar(),
                'migrar:reverter' => $this->comandoMigrarReverter(),
                'migrar:status' => $this->comandoMigrarStatus(),
                'ajuda', '--help', '-h' => $this->comandoAjuda(),
                default => $this->comandoDesconhecido($comando),
            };
        } catch (Throwable $e) {
            $this->escreverLinha("\033[31m[ERRO]\033[0m " . $e->getMessage());
            return 1;
        }
    }

    /**
     * Executa migrações pendentes.
     *
     * @return int
     */
    protected function comandoMigrar(): int
    {
        $this->escreverLinha("\033[34m[DEXTER]\033[0m Executando migrações pendentes...");
        $runner = new MigrationRunner($this->db, $this->caminhoMigracoes);
        $executadas = $runner->executarPendentes();

        if (empty($executadas)) {
            $this->escreverLinha("\033[32m[OK]\033[0m Nenhuma migração pendente.");
            return 0;
        }

        foreach ($executadas as $migracao) {
            $this->escreverLinha("  -> Migrado com sucesso: \033[32m{$migracao}\033[0m");
        }

        $this->escreverLinha("\033[32m[CONCLUÍDO]\033[0m Total de migrações executadas: " . count($executadas));
        return 0;
    }

    /**
     * Reverte o último lote de migrações.
     *
     * @return int
     */
    protected function comandoMigrarReverter(): int
    {
        $this->escreverLinha("\033[33m[DEXTER]\033[0m Revertendo último lote de migrações...");
        $runner = new MigrationRunner($this->db, $this->caminhoMigracoes);
        $revertidas = $runner->reverterUltimoLote();

        if (empty($revertidas)) {
            $this->escreverLinha("\033[33m[AVISO]\033[0m Não há lotes de migrações para reverter.");
            return 0;
        }

        foreach ($revertidas as $migracao) {
            $this->escreverLinha("  <- Revertido com sucesso: \033[33m{$migracao}\033[0m");
        }

        $this->escreverLinha("\033[32m[CONCLUÍDO]\033[0m Total de migrações revertidas: " . count($revertidas));
        return 0;
    }

    /**
     * Exibe o status de cada migração.
     *
     * @return int
     */
    protected function comandoMigrarStatus(): int
    {
        $this->escreverLinha("\033[34m[DEXTER]\033[0m Status das migrações:");
        $runner = new MigrationRunner($this->db, $this->caminhoMigracoes);
        $status = $runner->obterStatus();

        if (empty($status)) {
            $this->escreverLinha("Nenhuma migração encontrada no diretório: {$this->caminhoMigracoes}");
            return 0;
        }

        $this->escreverLinha(sprintf("%-55s | %-12s | %-6s", "Migração", "Status", "Lote"));
        $this->escreverLinha(str_repeat('-', 80));

        foreach ($status as $item) {
            $textoStatus = $item['executada'] ? "\033[32mExecutada\033[0m" : "\033[31mPendente\033[0m";
            $lote = $item['lote'] !== null ? (string) $item['lote'] : '-';
            $this->escreverLinha(sprintf("%-55s | %-21s | %-6s", $item['migracao'], $textoStatus, $lote));
        }

        return 0;
    }

    /**
     * Exibe o menu de ajuda.
     *
     * @return int
     */
    protected function comandoAjuda(): int
    {
        $this->escreverLinha("\033[36mDexter Framework Console CLI\033[0m - Versão 0.1.0-beta");
        $this->escreverLinha("Uso: php dexter <comando> [opções]\n");
        $this->escreverLinha("Comandos disponíveis:");
        $this->escreverLinha("  \033[32mmigrar\033[0m           Executa migrações pendentes em um novo lote.");
        $this->escreverLinha("  \033[33mmigrar:reverter\033[0m  Reverte o último lote de migrações executadas.");
        $this->escreverLinha("  \033[34mmigrar:status\033[0m    Lista o status e o lote de cada migração.");
        $this->escreverLinha("  \033[37majuda\033[0m            Exibe este guia de ajuda.");
        return 0;
    }

    /**
     * Trata comando desconhecido.
     *
     * @param string $comando
     * @return int
     */
    protected function comandoDesconhecido(string $comando): int
    {
        $this->escreverLinha("\033[31m[ERRO]\033[0m Comando desconhecido: '{$comando}'.");
        $this->escreverLinha("Execute 'php dexter ajuda' para ver os comandos disponíveis.");
        return 1;
    }

    /**
     * Escreve linha na saída padrão (stdout).
     *
     * @param string $mensagem
     * @return void
     */
    protected function escreverLinha(string $mensagem): void
    {
        echo $mensagem . PHP_EOL;
    }
}
