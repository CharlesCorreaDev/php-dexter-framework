# Reduz o mapa a um único valor usando uma função callback

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-map.reduce.php

---

# Ds\Map::reduce

(PECL ds >= 1.0.0)

Ds\Map::reduce — Reduz o mapa a um único valor usando uma função callback

### Descrição

public function **Ds\Map::reduce**([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = ?): [mixed](language.types.mixed.md)

Reduz o mapa a um único valor usando uma função callback.

### Parâmetros

`callback`
:   function callback([mixed](language.types.mixed.md) `$carry`, [mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

    `carry`
    :   O valor de retorno do callback anterior, ou `initial` se
        for a primeira iteração.

    `key`
    :   A chave da iteração atual.

    `value`
    :   O valor da iteração atual.

`initial`
:   O valor inicial do valor de transporte. Pode ser **`null`**.

### Valor Retornado

O valor de retorno do callback final.

### Examples

**Exemplo #1 Exemplo de **Ds\Map::reduce()** com valor inicial**

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

$callback = function($carry, $key, $value) {
    return $carry * $value;
};

var_dump($map->reduce($callback, 5));

// Iterações:
//
// $carry = $initial = 5
//
// $carry = $carry * 1 =  5
// $carry = $carry * 2 = 10
// $carry = $carry * 3 = 30
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(30)
```

**Exemplo #2 Exemplo de **Ds\Map::reduce()** sem um valor inicial**

```
<?php
$map = new \Ds\Map(["a" => 1, "b" => 2, "c" => 3]);

var_dump($map->reduce(function($carry, $key, $value) {
    return $carry + $value + 5;
}));

// Iterations:
//
// $carry = $initial = null
//
// $carry = $carry + 1 + 5 =  6
// $carry = $carry + 2 + 5 = 13
// $carry = $carry + 3 + 5 = 21
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(21)
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
