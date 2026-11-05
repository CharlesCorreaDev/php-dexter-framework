# Conta as ocorrências de cada valor distinto em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-count-values.php

---

# array\_count\_values

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_count\_values — Conta as ocorrências de cada valor distinto em um array

### Descrição

function **array\_count\_values**([array](language.types.array.md) `$array`): [array](language.types.array.md)

A função **array\_count\_values()** retorna um array utilizando os valores
do parâmetro `array` (que devem ser [int](language.types.integer.md)s ou [string](language.types.string.md)s) como chaves e suas respectivas
frequências em `array` como valores.

### Parâmetros

`array`
:   O array de valores para contar

### Valor Retornado

Retorna um array associativo de valores de `array` como
chaves e suas quantias como valor.

### Erros/Exceções

Dispara **`E_WARNING`** para cada elemento que não for
[string](language.types.string.md) ou [int](language.types.integer.md).

### Examples

**Exemplo #1 Exemplo da **array\_count\_values()****

```
<?php
$array = array(1, "ola", 1, "mundo", "ola");
print_r(array_count_values($array));
?>
```

O exemplo acima produzirá:

```
Array
(
    [1] => 2
    [ola] => 2
    [mundo] => 1
)
```

### Veja também

- [count()](function.count.md) - Conta todos os elementos de um array ou de um objeto Countable
- [array\_unique()](function.array-unique.md) - Remove os valores duplicados de um array
- [array\_values()](function.array-values.md) - Retorna todos os valores de um array
- [count\_chars()](function.count-chars.md) - Retorna informação sobre caracteres usados em uma string

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
