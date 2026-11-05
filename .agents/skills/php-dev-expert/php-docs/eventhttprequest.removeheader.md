# Remove um cabeçalho HTTP dos cabeçalhos da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.removeheader.php

---

# EventHttpRequest::removeHeader

(PECL event >= 1.4.0-beta)

EventHttpRequest::removeHeader — Remove um cabeçalho HTTP dos cabeçalhos da requisição

### Descrição

public
function **EventHttpRequest::removeHeader**(
[string](language.types.string.md) `$key`
, 
[string](language.types.string.md) `$type`
): [void](language.types.void.md)

Remove um cabeçalho HTTP dos cabeçalhos da requisição.

### Parâmetros

`key`
:   O nome do cabeçalho.

`type`
:   `type`
    é uma das
    constantes
    `EventHttpRequest::*_HEADER`.

### Valor Retornado

Não tem valor de retorno.

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
