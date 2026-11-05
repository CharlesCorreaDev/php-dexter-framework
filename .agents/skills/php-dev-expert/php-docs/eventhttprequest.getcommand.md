# Retorna o comando de requisição (método)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.getcommand.php

---

# EventHttpRequest::getCommand

(PECL event >= 1.4.0-beta)

EventHttpRequest::getCommand — Retorna o comando de requisição (método)

### Descrição

public
function **EventHttpRequest::getCommand**(): [void](language.types.void.md)

Retorna o comando de requisição, uma das
constantes
[`EventHttpRequest::CMD_*`](class.eventhttprequest.md#eventhttprequest.constants).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o comando de requisição, uma das
constantes
[`EventHttpRequest::CMD_*`](class.eventhttprequest.md#eventhttprequest.constants).

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
