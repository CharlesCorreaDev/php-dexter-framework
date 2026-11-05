# Ordena o mapa no local pelo valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.sort.php

---

# Ds\Map::sort

(PECL ds >= 1.0.0)

Ds\Map::sort — 
Ordena o mapa no local pelo valor

### Descrição

public function **Ds\Map::sort**([callable](language.types.callable.md) `$comparator` = ?): [void](language.types.void.md)

Ordena o mapa no local pelo valor, usando uma função de comparação `comparator` opcional.

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

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::sort()****

```
<?php
$map = new \Ds\Map(["a" => 2, "b" => 3, "c" => 1]);
$map->sort();

print_r($map);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Map Object
(
    [0] => Ds\Pair Object
        (
            [key] => c
            [value] => 1
        )

    [1] => Ds\Pair Object
        (
            [key] => a
            [value] => 2
        )

    [2] => Ds\Pair Object
        (
            [key] => b
            [value] => 3
        )

)
```

**Exemplo #2 Exemplo de **Ds\Map::sort()** usando um comparador**

```
<?php
$map = new \Ds\Map(["a" => 2, "b" => 3, "c" => 1]);

$map->sort(function($a, $b) {
    return $b <=> $a;
});

print_r($map);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Map Object
(
    [0] => Ds\Pair Object
        (
            [key] => b
            [value] => 3
        )

    [1] => Ds\Pair Object
        (
            [key] => a
            [value] => 2
        )

    [2] => Ds\Pair Object
        (
            [key] => c
            [value] => 1
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
