# Retorna uma cópia, ordenada por valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.sorted.php

---

# Ds\Map::sorted

(PECL ds >= 1.0.0)

Ds\Map::sorted — Retorna uma cópia, ordenada por valor

### Descrição

public function **Ds\Map::sorted**([callable](language.types.callable.md) `$comparator` = ?): [Ds\Map](class.ds-map.md)

Retorna uma cópia, ordenada por valor, usando uma função de comparação `comparator` opcional.

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

Retorna uma cópia do mapa, ordenada por valor.

### Examples

**Exemplo #1 Exemplo de [Ds\Map::sort()](ds-map.sort.md)**

```
<?php
$map = new \Ds\Map(["a" => 2, "b" => 3, "c" => 1]);

print_r($map->sorted());
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

**Exemplo #2 Exemplo de [Ds\Map::sort()](ds-map.sort.md) usando um comparador**

```
<?php
$map = new \Ds\Map(["a" => 2, "b" => 3, "c" => 1]);

// Reverse
$sorted = $map->sorted(function($a, $b) {
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
