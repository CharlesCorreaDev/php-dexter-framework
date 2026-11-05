# Retorna uma sequência dos valores do mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.values.php

---

# Ds\Map::values

(PECL ds >= 1.0.0)

Ds\Map::values — Retorna uma sequência dos valores do mapa

### Descrição

public function **Ds\Map::values**(): [Ds\Sequence](class.ds-sequence.md)

Retorna uma sequência contendo todos os valores do mapa, na mesma ordem.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma [Ds\Sequence](class.ds-sequence.md) contendo todos os valores do mapa.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::values()****

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
var_dump($map->values());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Vector)#2 (3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
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
