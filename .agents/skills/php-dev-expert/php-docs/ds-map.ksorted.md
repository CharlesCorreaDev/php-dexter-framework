# Retorna uma cópia ordenada por chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.ksorted.php

---

# Ds\Map::ksorted

(No version information available, might only be in Git)

Ds\Map::ksorted — Retorna uma cópia ordenada por chave

### Descrição

public function **Ds\Map::ksorted**([callable](language.types.callable.md) `$comparator` = ?): [Ds\Map](class.ds-map.md)

Retorna uma cópia ordenada por chave, usando uma função de `comparator` opcional.

### Parâmetros

`comparator`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

### Valor Retornado

Retorna uma cópia do mapa, ordenada por chave.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::ksorted()****

```
<?php
$map = new \Ds\Map(["b" => 2, "c" => 3, "a" => 1]);

print_r($map->ksorted());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Map Object
(
    [0] => Ds\Pair Object
        (
            [key] => a
            [value] => 1
        )

    [1] => Ds\Pair Object
        (
            [key] => b
            [value] => 2
        )

    [2] => Ds\Pair Object
        (
            [key] => c
            [value] => 3
        )

)
```

**Exemplo #2 Exemplo de **Ds\Map::ksorted()** usando um comparador**

```
<?php
$map = new \Ds\Map([1 => "x", 2 => "y", 0 => "z"]);

// Reverse
$sorted = $map->ksorted(function($a, $b) {
    return $b <=> $a;
});

print_r($sorted);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Map Object
(
    [0] => Ds\Pair Object
        (
            [key] => 2
            [value] => y
        )

    [1] => Ds\Pair Object
        (
            [key] => 1
            [value] => x
        )

    [2] => Ds\Pair Object
        (
            [key] => 0
            [value] => z
        )

)
```

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
