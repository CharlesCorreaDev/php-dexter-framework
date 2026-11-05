# Cria uma nova instância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.construct.php

---

# Ds\Map::\_\_construct

(PECL ds >= 1.0.0)

Ds\Map::\_\_construct — Cria uma nova instância

### Descrição

public function **Ds\Map::\_\_construct**([mixed](language.types.mixed.md) `...$values`)

Cria uma nova instância, utilizando um objeto [traversable](class.traversable.md)
ou um [array](language.types.array.md) para os valores iniciais em `values`.

### Parâmetros

`values`
:   Um objeto traversable ou um [array](language.types.array.md) para usar como valores iniciais.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::\_\_construct()****

```
<?php
$map = new \Ds\Map();
var_dump($map);

$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);
var_dump($map);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Map)#1 (0) {
}
object(Ds\Map)#2 (3) {
  [0]=>
  object(Ds\Pair)#1 (2) {
    ["key"]=>
    string(1) "a"
    ["value"]=>
    int(1)
  }
  [1]=>
  object(Ds\Pair)#3 (2) {
    ["key"]=>
    string(1) "b"
    ["value"]=>
    int(2)
  }
  [2]=>
  object(Ds\Pair)#4 (2) {
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
