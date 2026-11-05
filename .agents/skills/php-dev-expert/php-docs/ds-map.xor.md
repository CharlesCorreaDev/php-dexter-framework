# Cria um novo mapa usando chaves apenas do mapa atual ou de outro mapa, mas não de ambos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.xor.php

---

# Ds\Map::xor

(PECL ds >= 1.0.0)

Ds\Map::xor — Cria um novo mapa usando chaves apenas do mapa atual ou de outro mapa, mas não de ambos

### Descrição

public function **Ds\Map::xor**([Ds\Map](class.ds-map.md) `$map`): [Ds\Map](class.ds-map.md)

Cria um novo mapa que contém chaves do mapa atual e de outro `map`,
mas não de ambos.

`A ⊖ B = {x : x ∈ (A \ B) ∪ (B \ A)}`

### Parâmetros

`map`
:   O outro mapa.

### Valor Retornado

Um novo mapa contendo chaves do mapa atual e de outro `map`,
mas não de ambos.

### Veja também

- [» Diferença Simétrica](https://en.wikipedia.org/wiki/Symmetric_difference) na Wikipedia

### Examples

**Exemplo #1 Exemplo de **Ds\Map::xor()****

```
<?php
$a = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
$b = new \Ds\Map(["b" => 4, "c" => 5, "d" => 6]);

print_r($a->xor($b));
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
            [key] => d
            [value] => 6
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
