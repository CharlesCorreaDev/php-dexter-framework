# Ordena as entradas com uma função de comparação definida pelo usuário e mantém a associação de chaves

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.uasort.php

---

# ArrayObject::uasort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayObject::uasort — Ordena as entradas com uma função de comparação definida pelo usuário e mantém a associação de chaves

### Descrição

public function **ArrayObject::uasort**([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

Esta função ordena as entradas de forma que as chaves mantenham sua
correlação com a entrada à qual estão associadas, usando uma
função de comparação definida pelo usuário.

Isso é usado principalmente ao ordenar arrays associativos onde a ordem real dos
elementos é significativa.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

### Parâmetros

`callback`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Exemplo de **ArrayObject::uasort()****

```
<?php
// Função de comparação
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Array a ser ordenado
$array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
$arrayObject = new ArrayObject($array);
var_dump($arrayObject);

// Ordena e imprime o array resultante
$arrayObject->uasort('cmp');
var_dump($arrayObject);
?>
```

O exemplo acima produzirá:

```
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(8) {
    ["a"]=>
    int(4)
    ["b"]=>
    int(8)
    ["c"]=>
    int(-1)
    ["d"]=>
    int(-9)
    ["e"]=>
    int(2)
    ["f"]=>
    int(5)
    ["g"]=>
    int(3)
    ["h"]=>
    int(-4)
  }
}
object(ArrayObject)#1 (1) {
  ["storage":"ArrayObject":private]=>
  array(8) {
    ["d"]=>
    int(-9)
    ["h"]=>
    int(-4)
    ["c"]=>
    int(-1)
    ["e"]=>
    int(2)
    ["g"]=>
    int(3)
    ["a"]=>
    int(4)
    ["f"]=>
    int(5)
    ["b"]=>
    int(8)
  }
}
```

### Veja também

- [ArrayObject::asort()](arrayobject.asort.md) - Ordenar as entradas por valor
- [ArrayObject::ksort()](arrayobject.ksort.md) - Ordena as entradas pela chave
- [ArrayObject::natsort()](arrayobject.natsort.md) - Ordena as entradas usando um algoritmo de "ordem natural"
- [ArrayObject::natcasesort()](arrayobject.natcasesort.md) - Ordena um array usando um algoritmo de "ordem natural" insensível a maiúsculas e minúsculas
- [ArrayObject::uksort()](arrayobject.uksort.md) - Ordena as entradas pelas chaves usando uma função de comparação definida pelo usuário
- [uasort()](function.uasort.md) - Ordena um array com uma função de comparação definida pelo usuário e mantém associações de índices

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
