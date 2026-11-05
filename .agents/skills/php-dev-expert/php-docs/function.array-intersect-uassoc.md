# Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-intersect-uassoc.php

---

# array\_intersect\_uassoc

(PHP 5, PHP 7, PHP 8)

array\_intersect\_uassoc — Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback

### Descrição

function **array\_intersect\_uassoc**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`, [callable](language.types.callable.md) `$key_compare_func`): [array](language.types.array.md)

**array\_intersect\_uassoc()** retorna um array
contendo todos os valores de `array`
que estão presentes em todos os argumentos. Note que as chaves são usadas
na comparação, ao contrário da função [array\_intersect()](function.array-intersect.md).

### Parâmetros

`array`
:   Array inicial para comparação dos arrays.

`arrays`
:   Arrays para comparar as chaves.

`key_compare_func`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

### Valor Retornado

Retorna os valores de `array` cujos valores existem
em todos os argumentos.

### Examples

**Exemplo #1 Exemplo da função **array\_intersect\_uassoc()****

```
<?php
$array1 = array("a" => "verde", "b" => "marrom", "c" => "azul", "vermelho");
$array2 = array("a" => "VERDE", "B" => "marrom", "amarelo", "vermelho");

print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
?>
```

O exemplo acima produzirá:

```
Array
(
    [b] => marrom
)
```

### Veja também

- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
- [array\_uintersect\_assoc()](function.array-uintersect-assoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados utilizando uma função de callback
- [array\_uintersect\_uassoc()](function.array-uintersect-uassoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas
- [array\_intersect\_key()](function.array-intersect-key.md) - Calcula a interseção de arrays, comparando pelas chaves
- [array\_intersect\_ukey()](function.array-intersect-ukey.md) - Computa a interseção de arrays usando uma função de retorno nas chaves para comparação

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
