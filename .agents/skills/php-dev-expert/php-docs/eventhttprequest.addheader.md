# Adiciona um cabeçalho HTTP aos cabeçalhos da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.addheader.php

---

# EventHttpRequest::addHeader

(PECL event >= 1.4.0-beta)

EventHttpRequest::addHeader — Adiciona um cabeçalho HTTP aos cabeçalhos da requisição

### Descrição

public
function **EventHttpRequest::addHeader**(
[string](language.types.string.md) `$key`
, 
[string](language.types.string.md) `$value`
, 
[int](language.types.integer.md) `$type`
): [bool](language.types.boolean.md)

Adiciona um cabeçalho HTTP aos cabeçalhos da requisição.

### Parâmetros

`key`
:   Nome do cabeçalho.

`value`
:   Valor do cabeçalho.

`type`
:   Uma das
    [constantes
    `EventHttpRequest::*_HEADER`](class.eventhttprequest.md#eventhttprequest.constants).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventHttpRequest::removeHeader()](eventhttprequest.removeheader.md) - Remove um cabeçalho HTTP dos cabeçalhos da requisição

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
