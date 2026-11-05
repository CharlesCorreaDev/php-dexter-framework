# Retorna o primeiro par no mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.first.php

---

# Ds\Map::first

(PECL ds >= 1.0.0)

Ds\Map::first — Retorna o primeiro par no mapa

### Descrição

public function **Ds\Map::first**(): [Ds\Pair](class.ds-pair.md)

Retorna o primeiro par no mapa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O primeiro par no mapa.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::first()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
var_dump($map->first());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Pair)#2 (2) {
  ["key"]=>
  string(1) "a"
  ["value"]=>
  int(1)
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
