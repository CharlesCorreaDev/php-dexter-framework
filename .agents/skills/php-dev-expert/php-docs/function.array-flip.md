# Permuta todas as chaves e seus valores associados em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-flip.php

---

# array\_flip

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_flip — Permuta todas as chaves e seus valores associados em um array

### Descrição

function **array\_flip**([array](language.types.array.md) `$array`): [array](language.types.array.md)

**array\_flip()** retorna um [array](language.types.array.md) com suas relações trocadas,
ou seja, as chaves de `array` passam a ser os valores e os valores
de `array` passam a ser as chaves.

Note que os valores de `array` devem ser chaves
válidas, ou seja, eles precisam ser [int](language.types.integer.md)
ou [string](language.types.string.md). Um aviso será mostrado se um valor é de um tipo inválido para chaves,
e o par chave/valor em questão
*não será invertido*.

Se um valor tem várias ocorrências, a última chave será usada
como valor, e todos os outros serão perdidos.

### Parâmetros

`array`
:   Um array de pares chave/valor para inverter.

### Valor Retornado

Retorna o array trocado.

### Examples

**Exemplo #1 Exemplo da função **array\_flip()****

```
<?php
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);
?>
```

O exemplo acima produzirá:

```
Array
(
    [oranges] => 0
    [apples] => 1
    [pears] => 2
)
```

**Exemplo #2 Exemplo da função **array\_flip()**: colisão**

```
<?php
$trans = array("a" => 1, "b" => 1, "c" => 2);
$trans = array_flip($trans);

print_r($trans);
?>
```

O exemplo acima produzirá:

```
Array
(
    [1] => b
    [2] => c
)
```

### Veja também

- [array\_values()](function.array-values.md) - Retorna todos os valores de um array
- [array\_keys()](function.array-keys.md) - Retorna todas as chaves ou uma parte das chaves de um array
- [array\_reverse()](function.array-reverse.md) - Retorna um array com os elementos na ordem inversa

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
