# Funções para Execução de programas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.exec.php

---

# Funções para Execução de programas

## Notas

**Aviso**

Arquivos abertos com travas (especialmente sessões abertas) devem ser fechados
antes de executar um programa em segundo plano.

## Veja também

Estas funções estão muito relacionadas com
[backtick operator](language.operators.execution.md).

## Índice

- [escapeshellarg](function.escapeshellarg.md) — Escapa uma string para ser usada como um argumento shell
- [escapeshellcmd](function.escapeshellcmd.md) — Escapa meta-caracteres shell
- [exec](function.exec.md) — Executa um programa externo
- [passthru](function.passthru.md) — Executa um programa externo e mostra a saída bruta
- [proc\_close](function.proc-close.md) — Fecha pipes a um processo aberto por proc\_open, aguarda seu encerramento e retorna seu código de saída
- [proc\_get\_status](function.proc-get-status.md) — Obtem informação sobre um processo aberto por proc\_open
- [proc\_nice](function.proc-nice.md) — Muda a prioridade do processo atual
- [proc\_open](function.proc-open.md) — Executa um comando e abre ponteiros de arquivo para entrada/saída
- [proc\_terminate](function.proc-terminate.md) — Termina um processo aberto por proc\_open
- [shell\_exec](function.shell-exec.md) — Executa um comando via shell e retorna a saída inteira como uma string
- [system](function.system.md) — Executa um programa externo e mostra a saída

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
