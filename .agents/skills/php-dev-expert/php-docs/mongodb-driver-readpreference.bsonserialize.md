# Retorna um objeto para serialização BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readpreference.bsonserialize.php

---

# MongoDB\Driver\ReadPreference::bsonSerialize

(mongodb >=1.2.0)

MongoDB\Driver\ReadPreference::bsonSerialize — Retorna um objeto para serialização BSON

### Descrição

final public function **MongoDB\Driver\ReadPreference::bsonSerialize**(): [stdClass](class.stdclass.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto para serializar ReadPreference como BSON.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 **MongoDB\Driver\ReadPreference::bsonSerialize()** com preferência de leitura primária**

```
<?php

$rp = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::PRIMARY);
var_dump($rp->bsonSerialize());

echo "\n", MongoDB\BSON\Document::fromPHP($rp)->toRelaxedExtendedJSON();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#2 (1) {
  ["mode"]=>
  string(7) "primary"
}

{ "mode" : "primary" }
```

**Exemplo #2 **MongoDB\Driver\ReadPreference::bsonSerialize()** com preferência de leitura secundária e conjuntos de tags**

```
<?php

$rp = new MongoDB\Driver\ReadPreference(
    MongoDB\Driver\ReadPreference::SECONDARY,
    [
        ['dc' => 'ny'],
        ['dc' => 'sf', 'use' => 'reporting'],
        []
    ]
);
var_dump($rp->bsonSerialize());

echo "\n", MongoDB\BSON\Document::fromPHP($rp)->toRelaxedExtendedJSON();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#2 (2) {
  ["mode"]=>
  string(9) "secondary"
  ["tags"]=>
  array(3) {
    [0]=>
    object(stdClass)#1 (1) {
      ["dc"]=>
      string(2) "ny"
    }
    [1]=>
    object(stdClass)#5 (2) {
      ["dc"]=>
      string(2) "sf"
      ["use"]=>
      string(9) "reporting"
    }
    [2]=>
    object(stdClass)#4 (0) {
    }
  }
}

{ "mode" : "secondary", "tags" : [ { "dc" : "ny" }, { "dc" : "sf", "use" : "reporting" }, {  } ] }
```

**Exemplo #3 **MongoDB\Driver\ReadPreference::bsonSerialize()** com preferência de leitura secundária e ociosidade máxima**

```
<?php

$rp = new MongoDB\Driver\ReadPreference(
    MongoDB\Driver\ReadPreference::SECONDARY,
    null,
    ['maxStalenessSeconds' => 120]
);
var_dump($rp->bsonSerialize());

echo "\n", MongoDB\BSON\Document::fromPHP($rp)->toRelaxedExtendedJSON();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#2 (2) {
  ["mode"]=>
  string(9) "secondary"
  ["maxStalenessSeconds"]=>
  int(120)
}

{ "mode" : "secondary", "maxStalenessSeconds" : 120 }
```

### Veja também

- [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) - Fornece um array ou documento para serializar como BSON
- [» Referência de Preferência de Leitura](https://www.mongodb.com/docs/manual/core/read-preference/)

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
