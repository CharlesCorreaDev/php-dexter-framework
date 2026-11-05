# Cria um novo mapa usando um callable para determinar quais pares incluir

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.filter.php

---

# Ds\Map::filter

(PECL ds >= 1.0.0)

Ds\Map::filter — 
Cria um novo mapa usando um [callable](language.types.callable.md) para determinar quais pares incluir

### Descrição

public function **Ds\Map::filter**([callable](language.types.callable.md) `$callback` = ?): [Ds\Map](class.ds-map.md)

Cria um novo mapa usando um [callable](language.types.callable.md) para determinar quais pares incluir.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

    [callable](language.types.callable.md) opcional que retorna **`true`** se o par deve ser incluído, **`false`** caso contrário.

    Se um callback não for fornecido, apenas os valores que são **`true`**
    (veja [conversão para booleano](language.types.boolean.md#language.types.boolean.casting))
    serão incluídos.

### Valor Retornado

Um novo mapa contendo todos os pares para os quais
o `callback` retornou **`true`**, ou todos os valores que
se convertem para **`true`** se um `callback` não foi fornecido.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::filter()** usando uma função callback**

```
<?php
$map = new \Ds\Map(["a", "b", "c", "d", "e"]);

var_dump($map->filter(function($key, $value) {
    return $key % 2 == 0;
}));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Map)#3 (3) {
  [0]=>
  object(Ds\Pair)#2 (2) {
    ["key"]=>
    int(0)
    ["value"]=>
    string(1) "a"
  }
  [1]=>
  object(Ds\Pair)#4 (2) {
    ["key"]=>
    int(2)
    ["value"]=>
    string(1) "c"
  }
  [2]=>
  object(Ds\Pair)#5 (2) {
    ["key"]=>
    int(4)
    ["value"]=>
    string(1) "e"
  }
}
```

**Exemplo #2 Exemplo de **Ds\Map::filter()** sem uma função callback**

```
<?php
$map = new \Ds\Map(["a" => 0, "b" => 1, "c" => true, "d" => false]);

var_dump($map->filter());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\Map)#2 (3) {
  [0]=>
  int(1)
  [1]=>
  string(1) "a"
  [2]=>
  bool(true)
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
