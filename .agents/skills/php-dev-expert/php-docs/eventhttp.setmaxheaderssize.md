# Define o tamanho máximo do cabeçalho HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.setmaxheaderssize.php

---

# EventHttp::setMaxHeadersSize

(PECL event >= 1.4.0-beta)

EventHttp::setMaxHeadersSize — Define o tamanho máximo do cabeçalho HTTP

### Descrição

public
function **EventHttp::setMaxHeadersSize**(
[int](language.types.integer.md) `$value`
): [void](language.types.void.md)

Define o tamanho máximo do cabeçalho HTTP.

### Parâmetros

`value`
:   O tamanho do cabeçalho em bytes.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- **EventHttp::setMaxHeadersSize()**

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
