# Verifica se o cliente está desconectado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.connection-aborted.php

---

# connection\_aborted

(PHP 4, PHP 5, PHP 7, PHP 8)

connection\_aborted — Verifica se o cliente está desconectado

### Descrição

function **connection\_aborted**(): [int](language.types.integer.md)

Verifica se o cliente está desconectado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna 1 se o cliente está desconectado, 0 caso contrário.

### Veja também

- [connection\_status()](function.connection-status.md) - Retorna o campo de bits do estado da conexão
- [ignore\_user\_abort()](function.ignore-user-abort.md) - Define se uma desconexão de cliente deve abortar execução de script
- [Tratamento de conexões](features.connection-handling.md)
  para um descrição completa sobre tratamento de conexões no PHP.

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
