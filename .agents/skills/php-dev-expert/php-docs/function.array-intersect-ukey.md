# Computa a interseção de arrays usando uma função de retorno nas chaves para comparação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-intersect-ukey.php

---

# array\_intersect\_ukey

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

array\_intersect\_ukey — Computa a interseção de arrays usando uma função de retorno nas chaves para comparação

### Descrição

function **array\_intersect\_ukey**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`, [callable](language.types.callable.md) `$key_compare_func`): [array](language.types.array.md)

**array\_intersect\_ukey()** retorna um array
contendo todos os valores de `array`
que têm as mesmas chaves presentes em todos os argumentos.

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

Retorna os valores de `array` cujas chaves existem
em todos os argumentos.

### Examples

**Exemplo #1 Exemplo da função **array\_intersect\_ukey()****

```
<?php
function key_compare_func($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}

$array1 = array('azul'  => 1, 'vermelho' => 2, 'verde'   => 3, 'roxo'  => 4);
$array2 = array('verde' => 5, 'azul'     => 6, 'amarelo' => 7, 'rosa'  => 8);

var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));
?>
```

O exemplo acima produzirá:

```
array(2) {
  ["azul"]=>
  int(1)
  ["verde"]=>
  int(3)
}
```

Em nosso exemplo, é possível ver que somente as chaves `'azul'`
e `'verde'` estão presentes em ambos os arrays e assim
retornadas. Observe também que os valores para as chaves
`'azul'` e `'verde'` diferem entre os
dois arrays. Uma combinação ainda ocorre porque somente as chaves são
verificadas. Os valores retornados são os do `array`.

### Veja também

- [array\_diff()](function.array-diff.md) - Computa as diferenças entre arrays
- [array\_udiff()](function.array-udiff.md) - Computa a diferença de arrays usando uma função de callback para comparação dos dados
- [array\_diff\_assoc()](function.array-diff-assoc.md) - Computa a diferença entre arrays com checagem adicional de índice
- [array\_diff\_uassoc()](function.array-diff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
- [array\_udiff\_assoc()](function.array-udiff-assoc.md) - Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno
- [array\_udiff\_uassoc()](function.array-udiff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
- [array\_diff\_key()](function.array-diff-key.md) - Computa a diferença entre arrays usando as chaves na comparação
- [array\_diff\_ukey()](function.array-diff-ukey.md) - Computa a diferença entre arrays usando uma função callback na comparação de chaves
- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
- [array\_intersect\_uassoc()](function.array-intersect-uassoc.md) - Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback
- [array\_intersect\_key()](function.array-intersect-key.md) - Calcula a interseção de arrays, comparando pelas chaves

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
