# Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-uintersect-uassoc.php

---

# array\_uintersect\_uassoc

(PHP 5, PHP 7, PHP 8)

array\_uintersect\_uassoc — Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas

### Descrição

function **array\_uintersect\_uassoc**(  
    [array](language.types.array.md) `$array1`,  
    [array](language.types.array.md) `...$arrays`,  
    [callable](language.types.callable.md) `$value_compare_func`,  
    [callable](language.types.callable.md) `$key_compare_func`  
): [array](language.types.array.md)

Computa a interseção de arrays com checagem adicional de índice, compara
dados e índices utilizando funções de callback separadas.

### Parâmetros

`array1`
:   Primeiro array.

`arrays`
:   Outros arrays.

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

`key_compare_func`
:   Função para comparação das chaves (índices).

### Valor Retornado

Retorna um array contendo todos os valores de
`array1` que estão presentes em todos os argumentos.

### Examples

**Exemplo #1 Exemplo de **array\_uintersect\_uassoc()****

```
<?php
$array1 = array("a" => "verde", "b" => "marrom", "c" => "azul", "vermelho");
$array2 = array("a" => "VERDE", "B" => "marrom", "amarelo", "vermelho");

print_r(array_uintersect_uassoc($array1, $array2, "strcasecmp", "strcasecmp"));
?>
```

O exemplo acima produzirá:

```
Array
(
    [a] => verde
    [b] => marrom
)
```

### Veja também

- [array\_uintersect()](function.array-uintersect.md) - Computa a interseção de array, comparando dados com uma função callback
- [array\_intersect\_assoc()](function.array-intersect-assoc.md) - Computa a interseção de arrays com uma adicional verificação de índice
- [array\_intersect\_uassoc()](function.array-intersect-uassoc.md) - Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback
- [array\_uintersect\_assoc()](function.array-uintersect-assoc.md) - Computa a interseção de arrays com checagem adicional de índice, compara os dados utilizando uma função de callback

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
