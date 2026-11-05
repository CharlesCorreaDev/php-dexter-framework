# Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uksort.php

---

# uksort

(PHP 4, PHP 5, PHP 7, PHP 8)

uksort — Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.

### Descrição

function **uksort**([array](language.types.array.md) `&$array`, [callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

Ordena o `array` pelas chaves usando uma
função de comparação fornecida pelo usuário para determinar a ordem.

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

**Exemplo #1 Exemplo de **uksort()****

```
<?php
function cmp($a, $b)
{
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}

$a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);

uksort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
?>
```

O exemplo acima produzirá:

```
an apple: 3
a banana: 4
the Earth: 2
John: 1
```

### Veja também

- [usort()](function.usort.md) - Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário
- [uasort()](function.uasort.md) - Ordena um array com uma função de comparação definida pelo usuário e mantém associações de índices
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
