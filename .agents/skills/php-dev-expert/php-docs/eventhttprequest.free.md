# Libera o objeto e remove os eventos associados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.free.php

---

# EventHttpRequest::free

(PECL event >= 1.4.0-beta)

EventHttpRequest::free — Libera o objeto e remove os eventos associados

### Descrição

public
function **EventHttpRequest::free**(): [void](language.types.void.md)

Libera o objeto e remove os eventos associados.

### Parâmetros

Esta função não possui parâmetros.

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
