# Libera um conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-free-result.php

---

# ibase\_free\_result

(PHP 5, PHP 7 < 7.4.0)

ibase\_free\_result — Libera um conjunto de resultados

### Descrição

function **ibase\_free\_result**([resource](language.types.resource.md) `$result_identifier`): [bool](language.types.boolean.md)

Libera um conjunto de resultado.

### Parâmetros

`result_identifier`
:   Um conjunto de resultado criado pela [ibase\_query()](function.ibase-query.md) ou
    [ibase\_execute()](function.ibase-execute.md).

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
