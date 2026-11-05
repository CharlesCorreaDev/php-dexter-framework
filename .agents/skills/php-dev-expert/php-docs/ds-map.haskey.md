# Determina se o mapa contém uma chave dada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.haskey.php

---

# Ds\Map::hasKey

(PECL ds >= 1.0.0)

Ds\Map::hasKey — Determina se o mapa contém uma chave dada

### Descrição

public function **Ds\Map::hasKey**([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

Determina se o mapa contém uma chave dada.

### Parâmetros

`key`
:   A chave a ser procurada.

### Valor Retornado

Retorna **`true`** se a chave for encontrada, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::hasKey()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

var_dump($map->hasKey("a")); // true
var_dump($map->hasKey("e")); // false
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
