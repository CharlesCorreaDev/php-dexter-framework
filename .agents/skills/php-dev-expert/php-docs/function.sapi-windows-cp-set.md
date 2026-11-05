# Define o código de página do processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sapi-windows-cp-set.php

---

# sapi\_windows\_cp\_set

(PHP 7 >= 7.1.0, PHP 8)

sapi\_windows\_cp\_set — Define o código de página do processo

### Descrição

function **sapi\_windows\_cp\_set**([int](language.types.integer.md) `$codepage`): [bool](language.types.boolean.md)

Define o código de página do processo atual.

### Parâmetros

`codepage`
:   Um identificador de código de página.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
