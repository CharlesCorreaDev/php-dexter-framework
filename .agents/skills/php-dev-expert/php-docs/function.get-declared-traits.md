# Retorna um array de todas as Traits declaradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-declared-traits.php

---

# get\_declared\_traits

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

get\_declared\_traits — Retorna um array de todas as Traits declaradas

### Descrição

function **get\_declared\_traits**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com todos os nomes das Traits declaradas em seus valores.

### Veja também

- [class\_uses()](function.class-uses.md) - Retorna os traits usados pela classe fornecida
- [trait\_exists()](function.trait-exists.md) - Verifica se a trait existe

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
