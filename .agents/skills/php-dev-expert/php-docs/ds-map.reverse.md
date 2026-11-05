# Inverte o mapa no local

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.reverse.php

---

# Ds\Map::reverse

(PECL ds >= 1.0.0)

Ds\Map::reverse — 
Inverte o mapa no local

### Descrição

public function **Ds\Map::reverse**(): [void](language.types.void.md)

Inverte o mapa no local.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::reverse()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
$map->reverse();

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
