# Retorna o último par do mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.last.php

---

# Ds\Map::last

(PECL ds >= 1.0.0)

Ds\Map::last — Retorna o último par do mapa

### Descrição

public function **Ds\Map::last**(): [Ds\Pair](class.ds-pair.md)

Retorna o último par do mapa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O último par do mapa.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::last()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
var_dump($map->last());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Pair)#2 (2) {
  ["key"]=>
  string(1) "c"
  ["value"]=>
  int(3)
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
