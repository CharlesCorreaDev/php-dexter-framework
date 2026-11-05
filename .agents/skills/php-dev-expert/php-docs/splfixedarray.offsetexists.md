# Retorna se o índice solicitado existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.offsetexists.php

---

# SplFixedArray::offsetExists

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplFixedArray::offsetExists — Retorna se o índice solicitado existe

### Descrição

public function **SplFixedArray::offsetExists**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Verifica se o índice solicitado `index`
existe.

### Parâmetros

`index`
:   O índice sendo verificado.

### Valor Retornado

**`true`** se o `index` solicitado existir, caso contrário **`false`**

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
