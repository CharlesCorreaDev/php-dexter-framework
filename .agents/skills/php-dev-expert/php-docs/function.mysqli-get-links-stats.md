# Retorna informações sobre links abertos e em cache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysqli-get-links-stats.php

---

# mysqli\_get\_links\_stats

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

mysqli\_get\_links\_stats — Retorna informações sobre links abertos e em cache

### Descrição

function **mysqli\_get\_links\_stats**(): [array](language.types.array.md)

**mysqli\_get\_links\_stats()** retorna informações sobre links MySQL
abertos e em cache.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**mysqli\_get\_links\_stats()** retorna um array associativo
com três elementos, digitados da seguinte forma:

`total`
:   Um [int](language.types.integer.md) que indica o número total de links abertos em
    qualquer estado.

`active_plinks`
:   Um [int](language.types.integer.md) representando o número de conexões persistentes
    ativas.

`cached_plinks`
:   Um [int](language.types.integer.md) representando o número de conexões persistentes
    inativas.

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
