# Retorna o status atual da sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-status.php

---

# session\_status

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

session\_status — Retorna o status atual da sessão

### Descrição

function **session\_status**(): [int](language.types.integer.md)

**session\_status()** é usada para retornar o status atual da sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

- **`PHP_SESSION_DISABLED`** se as sessões estiverem desabilitadas.
- **`PHP_SESSION_NONE`** se as sessões estiverem habilitadas, mas nenhuma existir.
- **`PHP_SESSION_ACTIVE`** se as sessões estiverem habilitadas, e uma existir.

### Veja também

- [session\_start()](function.session-start.md) - Inicia uma nova sessão ou continua uma sessão existente

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
