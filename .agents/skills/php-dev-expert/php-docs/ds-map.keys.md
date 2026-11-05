# Retorna um conjunto das chaves do mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.keys.php

---

# Ds\Map::keys

(PECL ds >= 1.0.0)

Ds\Map::keys — Retorna um conjunto das chaves do mapa

### Descrição

public function **Ds\Map::keys**(): [Ds\Set](class.ds-set.md)

Retorna um conjunto contendo todas as chaves do mapa, na mesma ordem.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [Ds\Set](class.ds-set.md) contendo todas as chaves do mapa.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::keys()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
var_dump($map->keys());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Set)#2 (3) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [2]=>
  string(1) "c"
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
