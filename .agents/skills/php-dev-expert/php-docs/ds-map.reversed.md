# Retorna uma cópia invertida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.reversed.php

---

# Ds\Map::reversed

(PECL ds >= 1.0.0)

Ds\Map::reversed — Retorna uma cópia invertida

### Descrição

public function **Ds\Map::reversed**(): [Ds\Map](class.ds-map.md)

Retorna uma cópia invertida do mapa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia invertida do mapa.
> **Nota**:
>
> A instância atual não é afetada.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::reversed()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

print_r($map->reversed());
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
            [value] => 3
        )

    [1] => Ds\Pair Object
        (
            [key] => b
            [value] => 2
        )

    [2] => Ds\Pair Object
        (
            [key] => a
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
