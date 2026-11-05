# Define o tempo limite para uma solicitação HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttp.settimeout.php

---

# EventHttp::setTimeout

(PECL event >= 1.4.0-beta)

EventHttp::setTimeout — Define o tempo limite para uma solicitação HTTP

### Descrição

public
function **EventHttp::setTimeout**(
[int](language.types.integer.md) `$value`
): [void](language.types.void.md)

Define o tempo limite para uma solicitação HTTP.

### Parâmetros

`value`
:   Tempo limite em segundos.

### Valor Retornado

Nenhum valor é retornado.

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
