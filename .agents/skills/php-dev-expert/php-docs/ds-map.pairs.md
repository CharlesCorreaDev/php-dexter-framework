# Retorna uma sequência contendo todos os pares do mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.pairs.php

---

# Ds\Map::pairs

(PECL ds >= 1.0.0)

Ds\Map::pairs — Retorna uma sequência contendo todos os pares do mapa

### Descrição

public function **Ds\Map::pairs**(): [Ds\Sequence](class.ds-sequence.md)

Retorna uma [Ds\Sequence](class.ds-sequence.md) contendo todos os pares do mapa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

[Ds\Sequence](class.ds-sequence.md) contendo todos os pares do mapa.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::pairs()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

var_dump($map->pairs());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Vector)#8 (3) {
  [0]=>
  object(Ds\Pair)#5 (2) {
    ["key"]=>
    string(1) "a"
    ["value"]=>
    int(1)
  }
  [1]=>
  object(Ds\Pair)#6 (2) {
    ["key"]=>
    string(1) "b"
    ["value"]=>
    int(2)
  }
  [2]=>
  object(Ds\Pair)#7 (2) {
    ["key"]=>
    string(1) "c"
    ["value"]=>
    int(3)
  }
}
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
