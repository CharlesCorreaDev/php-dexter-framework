# Divide um array em pedaços

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-chunk.php

---

# array\_chunk

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

array\_chunk — Divide um array em pedaços

### Descrição

function **array\_chunk**([array](language.types.array.md) `$array`, [int](language.types.integer.md) `$length`, [bool](language.types.boolean.md) `$preserve_keys` = **`false`**): [array](language.types.array.md)

Divide um array em pedaços com tamanho informado pelo parâmetro `length`.
O último pedaço pode conter menos elementos que o parâmetro `length`.

### Parâmetros

`array`
:   O array.

`length`
:   O tamanho de cada pedaço.

`preserve_keys`
:   Quando definido para **`true`**, as chaves serão preservadas.
    O padrão é **`false`**, que reindexará os pedaços numericamente.

### Valor Retornado

Retorna um array multidimensional numericamente indexado, iniciando em 0,
com cada dimensão contendo `length` elementos.

### Erros/Exceções

Se `length` for menor que `1`,
será lançado um [ValueError](class.valueerror.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se `length` for menor que `1`, agora um [ValueError](class.valueerror.md) é lançado; antes, um erro de nível **`E_WARNING`** era emitido em vez de retornar **`null`**. |

### Examples

**Exemplo #1 Exemplo de **array\_chunk()****

```
<?php
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
        )

    [1] => Array
        (
            [0] => c
            [1] => d
        )

    [2] => Array
        (
            [0] => e
        )

)
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
        )

    [1] => Array
        (
            [2] => c
            [3] => d
        )

    [2] => Array
        (
            [4] => e
        )

)
```

### Veja também

- [array\_slice()](function.array-slice.md) - Extrai uma parcela de um array

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
