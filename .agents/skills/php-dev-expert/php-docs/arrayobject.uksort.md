# Ordena as entradas pelas chaves usando uma função de comparação definida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.uksort.php

---

# ArrayObject::uksort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayObject::uksort — Ordena as entradas pelas chaves usando uma função de comparação definida pelo usuário

### Descrição

public function **ArrayObject::uksort**([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

Esta função ordena as chaves das entradas usando uma função de comparação fornecida
pelo usuário. A correlação chave-entrada será mantida.

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

**Exemplo #1 Exemplo de **ArrayObject::uksort()****

```
<?php
function cmp($a, $b) {
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}

$array = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);
$arrayObject = new ArrayObject($array);
$arrayObject->uksort('cmp');

foreach ($arrayObject as $key => $value) {
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

- [ArrayObject::asort()](arrayobject.asort.md) - Ordenar as entradas por valor
- [ArrayObject::ksort()](arrayobject.ksort.md) - Ordena as entradas pela chave
- [ArrayObject::natsort()](arrayobject.natsort.md) - Ordena as entradas usando um algoritmo de "ordem natural"
- [ArrayObject::natcasesort()](arrayobject.natcasesort.md) - Ordena um array usando um algoritmo de "ordem natural" insensível a maiúsculas e minúsculas
- [ArrayObject::uasort()](arrayobject.uasort.md) - Ordena as entradas com uma função de comparação definida pelo usuário e mantém a associação de chaves
- [uksort()](function.uksort.md) - Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.

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
