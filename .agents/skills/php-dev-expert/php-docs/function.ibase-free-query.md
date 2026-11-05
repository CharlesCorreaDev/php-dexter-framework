# Libera a memória alocada para uma consulta preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-free-query.php

---

# ibase\_free\_query

(PHP 5, PHP 7 < 7.4.0)

ibase\_free\_query — Libera a memória alocada para uma consulta preparada

### Descrição

function **ibase\_free\_query**([resource](language.types.resource.md) `$query`): [bool](language.types.boolean.md)

Libera uma query preparada.

### Parâmetros

`query`
:   Uma query preparada com [ibase\_prepare()](function.ibase-prepare.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
