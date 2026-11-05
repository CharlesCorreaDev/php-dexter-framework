# Retorna se o mapa está vazio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.isempty.php

---

# Ds\Map::isEmpty

(PECL ds >= 1.0.0)

Ds\Map::isEmpty — Retorna se o mapa está vazio

### Descrição

public function **Ds\Map::isEmpty**(): [bool](language.types.boolean.md)

Retorna se o mapa está vazio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o mapa estiver vazio, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::isEmpty()****

```
<?php
$a = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
$b = new \Ds\Map();

var_dump($a->isEmpty());
var_dump($b->isEmpty());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
bool(true)
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
