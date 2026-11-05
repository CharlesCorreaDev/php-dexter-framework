# Retorna um array com os elementos na ordem inversa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-reverse.php

---

# array\_reverse

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_reverse — Retorna um array com os elementos na ordem inversa

### Descrição

function **array\_reverse**([array](language.types.array.md) `$array`, [bool](language.types.boolean.md) `$preserve_keys` = **`false`**): [array](language.types.array.md)

Recebe como entrada `array` e retorna um novo array com a
ordem dos elementos invertida.

### Parâmetros

`array`
:   O array de entrada.

`preserve_keys`
:   Se definido para **`true`** as chaves serão preservadas.
    Chaves não numéricas não são afetadas por essa opção, e são sempre preservadas.

### Valor Retornado

Retorna o array invertido.

### Examples

**Exemplo #1 Exemplo de **array\_reverse()****

```
<?php
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => php
    [1] => 4
    [2] => Array
        (
            [0] => green
            [1] => red
        )

)
Array
(
    [0] => Array
        (
            [0] => green
            [1] => red
        )

    [1] => 4
    [2] => php
)
Array
(
    [2] => Array
        (
            [0] => green
            [1] => red
        )

    [1] => 4
    [0] => php
)
```

### Veja também

- [array\_flip()](function.array-flip.md) - Permuta todas as chaves e seus valores associados em um array

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
