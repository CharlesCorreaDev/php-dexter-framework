# Indica se o código de página é compatível com UTF-8

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sapi-windows-cp-is-utf8.php

---

# sapi\_windows\_cp\_is\_utf8

(PHP 7 >= 7.1.0, PHP 8)

sapi\_windows\_cp\_is\_utf8 — Indica se o código de página é compatível com UTF-8

### Descrição

function **sapi\_windows\_cp\_is\_utf8**(): [bool](language.types.boolean.md)

Indica se o código de página do processo atual é compatível com UTF-8.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna verdadeiro se o código de página do processo atual for compatível com UTF-8, caso contrário retorna falso.

### Veja também

- [sapi\_windows\_cp\_get()](function.sapi-windows-cp-get.md) - Obtém o código de página atual

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
