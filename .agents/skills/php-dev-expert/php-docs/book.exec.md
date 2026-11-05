# Execução de programa do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.exec.php

---

# Execução de programa do sistema

# Introdução

Estas funções provém meios para executar comandos no sistema
em si, e meios de tornar seguros estes comandos.

> **Nota**:
>
> Todas as funções de execução chamam os comandos através de
> `cmd.exe` no Windows. Portanto, o usuário que chama estas
> funções precisam de privilégios apropriados para executar este comando. A única
> exceção é [proc\_open()](function.proc-open.md) com
> a opção `bypass_shell`.

- [Instalação/Configuração](exec.setup.md)
  - [Tipos de Recurso](exec.resources.md)
- [Funções para Execução de programas](ref.exec.md)
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
