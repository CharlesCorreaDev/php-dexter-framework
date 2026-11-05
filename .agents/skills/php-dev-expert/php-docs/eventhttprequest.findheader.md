# Encontra o valor pertencente a um cabeçalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.findheader.php

---

# EventHttpRequest::findHeader

(PECL event >= 1.4.0-beta)

EventHttpRequest::findHeader — Encontra o valor pertencente a um cabeçalho

### Descrição

public
function **EventHttpRequest::findHeader**(
[string](language.types.string.md) `$key`
, 
[string](language.types.string.md) `$type`
): [void](language.types.void.md)

Encontra o valor pertencente a um cabeçalho.

### Parâmetros

`key`
:   O nome do cabeçalho.

`type`
:   Uma das
    [constantes
    `EventHttpRequest::*_HEADER`](class.eventhttprequest.md#eventhttprequest.constants).

### Valor Retornado

Retorna **`null`** se o cabeçalho não for encontrado.

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
