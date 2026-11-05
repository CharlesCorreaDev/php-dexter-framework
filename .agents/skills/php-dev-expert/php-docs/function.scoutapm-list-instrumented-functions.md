# Lista funções que o scoutapm irá instrumentar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.scoutapm-list-instrumented-functions.php

---

# scoutapm\_list\_instrumented\_functions

(PECL scoutapm >= 1.0.2)

scoutapm\_list\_instrumented\_functions — Lista funções que o scoutapm irá instrumentar

### Descrição

function **scoutapm\_list\_instrumented\_functions**(): [array](language.types.array.md)

Retorna uma lista das funções que a extensão instrumentará.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**scoutapm\_list\_instrumented\_functions()** retorna um array
contendo uma lista de todas as funções que a extensão scoutapm é capaz de
instrumentar na instalação atual.

### Examples

**Exemplo #1 Buscando a lista de funções que o scoutapm irá instrumentar**

```
<?php
print_r(scoutapm_list_instrumented_functions());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => file_get_contents
    [1] => file_put_contents
    [2] => fopen
    [3] => fread
    [4] => fwrite
    [5] => pdo->exec
    [6] => pdo->query
    [7] => pdo->prepare
    [8] => pdostatement->execute
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
