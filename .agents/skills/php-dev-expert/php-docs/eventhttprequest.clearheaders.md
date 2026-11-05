# Remove todos os cabeçalhos de saída da lista de cabeçalhos da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.clearheaders.php

---

# EventHttpRequest::clearHeaders

(PECL event >= 1.4.0-beta)

EventHttpRequest::clearHeaders — Remove todos os cabeçalhos de saída da lista de cabeçalhos da requisição

### Descrição

public
function **EventHttpRequest::clearHeaders**(): [void](language.types.void.md)

Remove todos os cabeçalhos de saída da lista de cabeçalhos da requisição.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttpRequest::addHeader()](eventhttprequest.addheader.md) - Adiciona um cabeçalho HTTP aos cabeçalhos da requisição

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
