# Retorna o buffer de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.getinputbuffer.php

---

# EventHttpRequest::getInputBuffer

(PECL event >= 1.4.0-beta)

EventHttpRequest::getInputBuffer — Retorna o buffer de entrada

### Descrição

public
function **EventHttpRequest::getInputBuffer**(): [EventBuffer](class.eventbuffer.md)

Retorna o buffer de entrada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o buffer de entrada.

### Veja também

- [EventHttpRequest::getOutputBuffer()](eventhttprequest.getoutputbuffer.md) - Retorna o buffer de saída da requisição

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
