# Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-udiff-assoc.php

---

# array\_udiff\_assoc

(PHP 5, PHP 7, PHP 8)

array\_udiff\_assoc — Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno

### Descrição

function **array\_udiff\_assoc**([array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`, [callable](language.types.callable.md) `$value_compare_func`): [array](language.types.array.md)

Computa a diferença entre arrays com verificação adicional de índice, comparando
dados por uma função de retorno.

> **Nota**:
>
> Observe que esta função somente verifica uma dimensão de um array
> n-dimensional. Obviamente dimensões mais profundas podem ser verificadas usando, por exemplo,
> `array_udiff_assoc($array1[0], $array2[0], "alguma_função_de_comparação");`.

### Parâmetros

`array`
:   O primeiro array.

`arrays`
:   Arrays para comparar.

`value_compare_func`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

    **Cuidado**

    A função chamada de ordenação deve lidar com qualquer valor de qualquer array em qualquer ordem,
    independentemente da ordem em que eles foram originalmente fornecidos.
    O motivo é que cada array individual é primeiramente ordenado antes de ser comparado com outros arrays.
    Por exemplo:

    ```
    <?php
    $arrayA = ["string", 1];
    $arrayB = [["value" => 1]];
    // $item1 e $item2 podem ser "string", 1 ou ["value" => 1]
    $compareFunc = static function ($item1, $item2) {
        $value1 = is_string($item1) ? strlen($item1) : (is_array($item1) ? $item1["value"] : $item1);
        $value2 = is_string($item2) ? strlen($item2) : (is_array($item2) ? $item2["value"] : $item2);
        return $value1 <=> $value2;
    };
    ?>
    ```

### Valor Retornado

**array\_udiff\_assoc()** retorna um [array](language.types.array.md)
contendo todos os valores de `array`
que não estão presentes em qualquer dos outros argumentos.
Observe que as chaves são usadas na comparação, ao contrário de
[array\_diff()](function.array-diff.md) e [array\_udiff()](function.array-udiff.md).
A comparação dos dados dos arrays é executada usando uma função de retorno
fornecida pelo usuário. Neste aspecto, o comportamento é oposto ao de
[array\_diff\_assoc()](function.array-diff-assoc.md), que usa uma função interna para
comparação.

### Examples

**Exemplo #1 Exemplo de **array\_udiff\_assoc()****

```
<?php
class cr {
    private $priv_member;
    function __construct($val)
    {
        $this->priv_member = $val;
    }

    static function comp_func_cr($a, $b)
    {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member)? 1:-1;
    }
}

$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);

$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
print_r($result);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0.1] => cr Object
        (
            [priv_member:cr:private] => 9
        )

    [0.5] => cr Object
        (
            [priv_member:cr:private] => 12
        )

    [0] => cr Object
        (
            [priv_member:cr:private] => 23
        )

)
```

Em nosso exemplo acima é possível ver que o par `"1" => new cr(4)`
está presente em ambos os arrays e assim ele não está presente na saída da
função.

### Veja também

- [array\_diff()](function.array-diff.md) - Computa as diferenças entre arrays
- [array\_diff\_assoc()](function.array-diff-assoc.md) - Computa a diferença entre arrays com checagem adicional de índice
- [array\_diff\_uassoc()](function.array-diff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
- [array\_udiff()](function.array-udiff.md) - Computa a diferença de arrays usando uma função de callback para comparação dos dados
- [array\_udiff\_uassoc()](function.array-udiff-uassoc.md) - Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
- [array\_intersect()](function.array-intersect.md) - Calcula a interseção entre arrays
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
- [array\_uintersect()](function.array-uintersect.md) - Computa a interseção de array, comparando dados com uma função callback
- [array\_uintersect\_assoc()](function.array-uintersect-assoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados utilizando uma função de callback
- [array\_uintersect\_uassoc()](function.array-uintersect-uassoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas

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
