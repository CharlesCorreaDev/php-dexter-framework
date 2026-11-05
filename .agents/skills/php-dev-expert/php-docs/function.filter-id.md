# Retorna o ID de filtro pertencente a um filtro nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filter-id.php

---

# filter\_id

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

filter\_id — Retorna o ID de filtro pertencente a um filtro nomeado

### Descrição

function **filter\_id**([string](language.types.string.md) `$name`): [int](language.types.integer.md)|[false](language.types.singleton.md)

### Parâmetros

`name`
:   Nome do filtro a ser obtido.

### Valor Retornado

ID do filtro em caso de sucesso ou **`false`** se o filtro não existir.

### Veja também

- [filter\_list()](function.filter-list.md) - Retorna a lista de todos os filtros suportados

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
