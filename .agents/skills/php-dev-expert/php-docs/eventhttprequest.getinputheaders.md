# Retorna um array associativo dos cabeçalhos de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.getinputheaders.php

---

# EventHttpRequest::getInputHeaders

(PECL event >= 1.4.0-beta)

EventHttpRequest::getInputHeaders — Retorna um array associativo dos cabeçalhos de entrada

### Descrição

public
function **EventHttpRequest::getInputHeaders**(): [array](language.types.array.md)

Retorna um array associativo dos cabeçalhos de entrada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo dos cabeçalhos de entrada.

### Veja também

- [EventHttpRequest::getOutputHeaders()](eventhttprequest.getoutputheaders.md) - Retorna um array associativo dos cabeçalhos de saída

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
