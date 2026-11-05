# Determina se o mapa contém um valor dado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.hasvalue.php

---

# Ds\Map::hasValue

(PECL ds >= 1.0.0)

Ds\Map::hasValue — Determina se o mapa contém um valor dado

### Descrição

public function **Ds\Map::hasValue**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Determina se o mapa contém um valor dado.

### Parâmetros

`value`
:   O valor a ser procurado.

### Valor Retornado

Retorna **`true`** se o valor for encontrado, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::hasValue()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

var_dump($map->hasValue(1)); // true
var_dump($map->hasValue(4)); // false
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
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
