# Ordena um array com uma função de comparação definida pelo usuário e mantém associações de índices

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uasort.php

---

# uasort

(PHP 4, PHP 5, PHP 7, PHP 8)

uasort — Ordena um array com uma função de comparação definida pelo usuário e mantém associações de índices

### Descrição

function **uasort**([array](language.types.array.md) `&$array`, [callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

Ordena o `array` de forma que as chaves
mantenham suas correlações com os valores aos quais estão associadas,
usando uma função de comparação definida pelo usuário.

Esta função é usada principalmente para ordenar arrays associativos onde
a ordem real dos elementos é significativa.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

> **Nota**:
>
> Redefine o ponteiro interno do array para o primeiro elemento.

### Parâmetros

`array`
:   O array de entrada.

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
| 8.0.0 | Se a função `callback` espera que um parâmetro seja passado por referência, esta função agora emitirá um **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplo básico de **uasort()****

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
print_r($array);

// Ordena e mostra o array resultante
uasort($array, 'cmp');
print_r($array);
?>
```

O exemplo acima produzirá:

```
Array
(
    [a] => 4
    [b] => 8
    [c] => -1
    [d] => -9
    [e] => 2
    [f] => 5
    [g] => 3
    [h] => -4
)
Array
(
    [d] => -9
    [h] => -4
    [c] => -1
    [e] => 2
    [g] => 3
    [a] => 4
    [f] => 5
    [b] => 8
)
```

### Veja também

- [usort()](function.usort.md) - Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário
- [uksort()](function.uksort.md) - Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.
- [Comparação entre as funções de ordenação de array](array.sorting.md)

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
