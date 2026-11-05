# Retorna um objeto para serialização BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeconcern.bsonserialize.php

---

# MongoDB\Driver\WriteConcern::bsonSerialize

(mongodb >=1.2.0)

MongoDB\Driver\WriteConcern::bsonSerialize — Retorna um objeto para serialização BSON

### Descrição

final public function **MongoDB\Driver\WriteConcern::bsonSerialize**(): [stdClass](class.stdclass.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto para serializar WriteConcern como BSON.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 **MongoDB\Driver\WriteConcern::bsonSerialize()** com preocupação de gravação "majority"**

```
<?php

$wc = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY);
var_dump($wc->bsonSerialize());

echo "\n", MongoDB\BSON\Document::fromPHP($wc)->toRelaxedExtendedJSON();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#2 (1) {
  ["w"]=>
  string(8) "majority"
}

{ "w" : "majority" }
```

**Exemplo #2 **MongoDB\Driver\WriteConcern::bsonSerialize()** com "wtimeout" e "journal"**

```
<?php

$wc = new MongoDB\Driver\WriteConcern(2, 1000, true);
var_dump($wc->bsonSerialize());

echo "\n", MongoDB\BSON\Document::fromPHP($wc)->toRelaxedExtendedJSON();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#2 (3) {
  ["w"]=>
  int(2)
  ["j"]=>
  bool(true)
  ["wtimeout"]=>
  int(1000)
}

{ "w" : 2, "j" : true, "wtimeout" : 1000 }
```

### Veja também

- [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) - Fornece um array ou documento para serializar como BSON
- [» Referência de Preocupação de Gravação](https://www.mongodb.com/docs/manual/reference/write-concern/)

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
