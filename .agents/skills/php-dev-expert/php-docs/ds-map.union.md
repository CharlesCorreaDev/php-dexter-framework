# Cria um novo mapa usando valores da instância atual e de outro mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.union.php

---

# Ds\Map::union

(PECL ds >= 1.0.0)

Ds\Map::union — Cria um novo mapa usando valores da instância atual e de outro mapa

### Descrição

public function **Ds\Map::union**([Ds\Map](class.ds-map.md) `$map`): [Ds\Map](class.ds-map.md)

Cria um novo mapa que contém os pares da instância atual, bem como os
pares de outro `map`.

`A ∪ B = {x: x ∈ A ∨ x ∈ B}`

> **Nota**:
>
> Os valores da instância atual serão sobrescritos pelos fornecidos quando as chaves são iguais.

### Parâmetros

`map`
:   O outro mapa, para combinar com a instância atual.

### Valor Retornado

Um novo mapa contendo todos os pares da instância atual, bem como outro `map`.

### Veja também

- [» União](https://en.wikipedia.org/wiki/Union_(set_theory)) na Wikipedia

### Examples

**Exemplo #1 Exemplo de **Ds\Map::union()****

```
<?php
$a = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
$b = new \Ds\Map(["b" => 3, "c" => 4, "d" => 5]);

print_r($a->union($b));
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
            [value] => 3
        )

    [2] => Ds\Pair Object
        (
            [key] => c
            [value] => 4
        )

    [3] => Ds\Pair Object
        (
            [key] => d
            [value] => 5
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
