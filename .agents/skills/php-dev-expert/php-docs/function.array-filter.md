# Filtra elementos de um array utilizando uma função callback

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-filter.php

---

# array\_filter

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

array\_filter — Filtra elementos de um array utilizando uma função callback

### Descrição

function **array\_filter**([array](language.types.array.md) `$array`, [?](language.types.null.md)[callable](language.types.callable.md) `$callback` = **`null`**, [int](language.types.integer.md) `$mode` = 0): [array](language.types.array.md)

Itera sobre cada valor de
`array` passando-os para a função
`callback`. Se a função
`callback` retornar **`true`**, o valor atual de
`array` é retornado no [array](language.types.array.md) resultante.

Chaves do array são preservadas,e podem resultar em lacunas se o `array` foi indexado.
O [array](language.types.array.md) resultante pode ser reindexado usando a função [array\_values()](function.array-values.md).

### Parâmetros

`array`
:   O array a ser iterado

`callback`
:   A função callback a ser usada

    Se nenhum `callback` é fornecido, todas entradas vazias do
    `array` serão removidas. Veja [empty()](function.empty.md)
    para saber como o PHP define vazia nesse caso.

`mode`
:   Flag determinando quais argumentos são passados para `callback`:

    - **`ARRAY_FILTER_USE_KEY`** - passa chaves como argumentos
      para `callback` em vez de valor
    - **`ARRAY_FILTER_USE_BOTH`** - passa tanto valor quanto chave como
      argumento para `callback` em vez do valor

    Padrão é `0` que em vez disso irá passar valor como o único argumento
    para `callback`.

### Valor Retornado

Retorna o array filtrado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `callback` agora é anulável. |
| 8.0.0 | Se a função `callback` espera que um parâmetro seja passado por referência, esta função agora emitirá um **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplo da função **array\_filter()****

```
<?php
function impar($var)
{
    // retorna se o inteiro informado é impar
    return $var & 1;
}

function par($var)
{
    // retorna se o inteiro informado é par
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Ímpares: \n";
print_r(array_filter($array1, "impar"));
echo "Pares: \n";
print_r(array_filter($array2, "par"));
?>
```

O exemplo acima produzirá:

```
Ímpares:
Array
(
    [a] => 1
    [c] => 3
    [e] => 5
)
Pares:
Array
(
    [0] => 6
    [2] => 8
    [4] => 10
    [6] => 12
)
```

**Exemplo #2 **array\_filter()** sem
`callback`**

```
<?php

$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '0',
    6 => 0,
];

print_r(array_filter($entry));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => foo
    [2] => -1
)
```

**Exemplo #3 **array\_filter()** com
`mode`**

```
<?php

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["b"]=>
  int(2)
}
array(2) {
  ["b"]=>
  int(2)
  ["d"]=>
  int(4)
}
```

### Notas

**Cuidado**

Se o array for modificado por uma função de retorno (ex.: elemento
adicionado ou indefinido), o comportamento desta função é indefinido.

### Veja também

- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_find()](function.array-find.md) - Retorna um primeiro elemento que satisfaz uma função de retorno
- [array\_any()](function.array-any.md) - Verifica se pelo menos um elemento de um array satisfaz uma função de retorno
- [array\_map()](function.array-map.md) - Aplica uma função em todos os elementos dos arrays dados
- [array\_reduce()](function.array-reduce.md) - Reduz um array para um único valor através de um processo iterativo via callback

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
