# Define o tamanho máximo do corpo da solicitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.setmaxbodysize.php

---

# EventHttp::setMaxBodySize

(PECL event >= 1.4.0-beta)

EventHttp::setMaxBodySize — Define o tamanho máximo do corpo da solicitação

### Descrição

public
function **EventHttp::setMaxBodySize**(
[int](language.types.integer.md) `$value`
): [void](language.types.void.md)

Define o tamanho máximo do corpo da solicitação.

### Parâmetros

`value`
:   O tamanho do corpo em bytes.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttp::setMaxHeadersSize()](eventhttp.setmaxheaderssize.md) - Define o tamanho máximo do cabeçalho HTTP

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
