# Retorna todos os valores de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-values.php

---

# array\_values

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_values — Retorna todos os valores de um array

### Descrição

function **array\_values**([array](language.types.array.md) `$array`): [array](language.types.array.md)

**array\_values()** retorna todos os valores do array
`array` num array indexado numericamente.

### Parâmetros

`array`
:   O array.

### Valor Retornado

Retorna um array indexado de valores.

### Examples

**Exemplo #1 Exemplo de **array\_values()****

```
<?php
$array = array("tamanho" => "G", "cor" => "dourado");
print_r(array_values ($array));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => G
    [1] => dourado
)
```

### Veja também

- [array\_keys()](function.array-keys.md) - Retorna todas as chaves ou uma parte das chaves de um array
- [array\_combine()](function.array-combine.md) - Cria um array usando um array para chaves e outro para valores

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
