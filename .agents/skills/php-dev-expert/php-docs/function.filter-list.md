# Retorna a lista de todos os filtros suportados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filter-list.php

---

# filter\_list

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

filter\_list — Retorna a lista de todos os filtros suportados

### Descrição

function **filter\_list**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de nomes de todos os filtros suportados, um array vazio se
não houver filtros. Índices deste array não são IDs de filtros, estes podem ser
obtidos com [filter\_id()](function.filter-id.md) a partir do nome.

### Examples

**Exemplo #1 Um exemplo de **filter\_list()****

```
<?php
print_r(filter_list());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => int
    [1] => boolean
    [2] => float
    [3] => validate_regexp
    [4] => validate_url
    [5] => validate_email
    [6] => validate_ip
    [7] => string
    [8] => stripped
    [9] => encoded
    [10] => special_chars
    [11] => unsafe_raw
    [12] => email
    [13] => url
    [14] => number_int
    [15] => number_float
    [16] => magic_quotes
    [17] => callback
)
```

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
