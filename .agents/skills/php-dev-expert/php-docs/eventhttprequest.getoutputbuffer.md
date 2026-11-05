# Retorna o buffer de saída da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.getoutputbuffer.php

---

# EventHttpRequest::getOutputBuffer

(PECL event >= 1.4.0-beta)

EventHttpRequest::getOutputBuffer — Retorna o buffer de saída da requisição

### Descrição

public
function **EventHttpRequest::getOutputBuffer**(): [EventBuffer](class.eventbuffer.md)

Retorna o buffer de saída da requisição.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o buffer de saída da requisição.

### Veja também

- [EventHttpRequest::getInputBuffer()](eventhttprequest.getinputbuffer.md) - Retorna o buffer de entrada

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
