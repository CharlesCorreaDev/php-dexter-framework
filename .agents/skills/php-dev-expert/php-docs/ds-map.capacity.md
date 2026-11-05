# Retorna a capacidade atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.capacity.php

---

# Ds\Map::capacity

(PECL ds >= 1.0.0)

Ds\Map::capacity — Retorna a capacidade atual

### Descrição

public function **Ds\Map::capacity**(): [int](language.types.integer.md)

Retorna a capacidade atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A capacidade atual.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::capacity()****

```
<?php
$map = new \Ds\Map();
var_dump($map->capacity());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(16)
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
