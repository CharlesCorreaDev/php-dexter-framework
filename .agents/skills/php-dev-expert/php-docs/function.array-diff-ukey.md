# Computa a diferença entre arrays usando uma função callback na comparação de chaves

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-diff-ukey.php

---

# array\_diff\_ukey

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

array\_diff\_ukey — Computa a diferença entre arrays usando uma função callback na comparação de chaves

### Descrição

function **array\_diff\_ukey**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`, [callable](language.types.callable.md) `$key_compare_func`): [array](language.types.array.md)

Compara as chaves de `array` com as chaves
de `arrays` e retorna a diferença.
Esta função é similar a [array\_diff()](function.array-diff.md), com exceção que a
comparação é feita nas chaves ao invés dos valores.

Diferente de [array\_diff\_key()](function.array-diff-key.md) uma função callback
é fornecida e usada para comparação de índices, não função interna.

### Parâmetros

`array`
:   O array a ser comparado

`arrays`
:   Arrays para comparar

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

Retorna um [array](language.types.array.md) contendo todas as entradas de
`array` que não estão presentes em nenhum outro array.

### Examples

**Exemplo #1 Exemplo da função **array\_diff\_ukey()****

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

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));
?>
```

O exemplo acima produzirá:

```
array(2) {
  ["red"]=>
  int(2)
  ["purple"]=>
  int(4)
}
```

### Notas

> **Nota**:
>
> Esta função verifica somente uma dimensão de um array n-dimensional. É claro
> que as dimensões mais profundas podem ser verificadas usando
> `array_diff_ukey($array1[0], $array2[0], 'callback_func');`.

### Veja também

- [array\_diff()](function.array-diff.md) - Computa as diferenças entre arrays
- [array\_udiff()](function.array-udiff.md) - Computa a diferença de arrays usando uma função de callback para comparação dos dados
- [array\_diff\_assoc()](function.array-diff-assoc.md) - Computa a diferença entre arrays com checagem adicional de índice
- [array\_diff\_uassoc()](function.array-diff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
- [array\_udiff\_assoc()](function.array-udiff-assoc.md) - Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno
- [array\_udiff\_uassoc()](function.array-udiff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
- [array\_diff\_key()](function.array-diff-key.md) - Computa a diferença entre arrays usando as chaves na comparação
- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
- [array\_intersect\_uassoc()](function.array-intersect-uassoc.md) - Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback
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
