# Retorna uma cópia rasa do mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.copy.php

---

# Ds\Map::copy

(PECL ds >= 1.0.0)

Ds\Map::copy — Retorna uma cópia rasa do mapa

### Descrição

public function **Ds\Map::copy**(): [Ds\Map](class.ds-map.md)

Retorna uma cópia rasa do mapa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia rasa do mapa.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::copy()****

```
<?php
$map = new \Ds\Map([
    "a" => 1,
    "b" => 2,
    "c" => 3,
]);

print_r($map->copy());
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
