# Reduz um array para um único valor através de um processo iterativo via callback

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-reduce.php

---

# array\_reduce

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

array\_reduce — Reduz um array para um único valor através de um processo iterativo via callback

### Descrição

function **array\_reduce**([array](language.types.array.md) `$array`, [callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = **`null`**): [mixed](language.types.mixed.md)

**array\_reduce()** aplica iterativamente a função
`callback` aos elementos de
`array`, de forma a reduzir o array a
um único valor.

### Parâmetros

`array`
:   O array de entrada.

`callback`
:   function callback([mixed](language.types.mixed.md) `$carry`, [mixed](language.types.mixed.md) `$item`): [mixed](language.types.mixed.md)

    `carry`
    :   Informa o valor da iteração anterior. No caso da
        primeira iteração ele terá o valor de
        `initial`.

    `item`
    :   Mantém o valor da iteração atual.

`initial`
:   Se o argumento opcional `initial`
    for passado, ele será utilizado no início do processo, ou como
    um resultado final se o array estiver vazio.

### Valor Retornado

Retorna o valor resultante.

Se a array estiver vazio e `initial` não for passado,
**array\_reduce()** retornará **`null`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se a função `callback` espera que um parâmetro seja passado por referência, esta função agora emitirá um **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplo de **array\_reduce()****

```
<?php
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"
?>
```

### Veja também

- [array\_filter()](function.array-filter.md) - Filtra elementos de um array utilizando uma função callback
- [array\_map()](function.array-map.md) - Aplica uma função em todos os elementos dos arrays dados
- [array\_unique()](function.array-unique.md) - Remove os valores duplicados de um array
- [array\_count\_values()](function.array-count-values.md) - Conta as ocorrências de cada valor distinto em um array

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
