# Retorna um array associativo dos cabeçalhos de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.getoutputheaders.php

---

# EventHttpRequest::getOutputHeaders

(PECL event >= 1.4.0-beta)

EventHttpRequest::getOutputHeaders — Retorna um array associativo dos cabeçalhos de saída

### Descrição

public
function **EventHttpRequest::getOutputHeaders**(): [void](language.types.void.md)

Retorna um array associativo dos cabeçalhos de saída.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [EventHttpRequest::getInputHeaders()](eventhttprequest.getinputheaders.md) - Retorna um array associativo dos cabeçalhos de entrada

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
