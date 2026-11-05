# Retorna o campo de bits do estado da conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.connection-status.php

---

# connection\_status

(PHP 4, PHP 5, PHP 7, PHP 8)

connection\_status — Retorna o campo de bits do estado da conexão

### Descrição

function **connection\_status**(): [int](language.types.integer.md)

Obtém o campo de bits do estado da conexão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o campo de bits do estado da conexão, que pode ser confrontado com as constantes
[**`CONNECTION_*`**](misc.constants.md)
para determinar o estado da conexão.

### Veja também

- [connection\_aborted()](function.connection-aborted.md) - Verifica se o cliente está desconectado
- [ignore\_user\_abort()](function.ignore-user-abort.md) - Define se uma desconexão de cliente deve abortar execução de script
- [Manipulação de Conexões](features.connection-handling.md)
  para uma descrição completa de manipulação de conexões no PHP.

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
