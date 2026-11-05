# Retorna um objeto para serialização BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-readconcern.bsonserialize.php

---

# MongoDB\Driver\ReadConcern::bsonSerialize

(mongodb >=1.2.0)

MongoDB\Driver\ReadConcern::bsonSerialize — Retorna um objeto para serialização BSON

### Descrição

final public function **MongoDB\Driver\ReadConcern::bsonSerialize**(): [stdClass](class.stdclass.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto para serializar o ReadConcern como BSON.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 **MongoDB\Driver\ReadConcern::bsonSerialize()** com preocupação de leitura vazia**

```
<?php

$rc = new MongoDB\Driver\ReadConcern;
var_dump($rc->bsonSerialize());

echo "\n", MongoDB\BSON\Document::fromPHP($rc)->toRelaxedExtendedJSON();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#2 (0) {
}

{ }
```

**Exemplo #2 **MongoDB\Driver\ReadConcern::bsonSerialize()** com preocupação de leitura local**

```
<?php

$rc = new MongoDB\Driver\ReadConcern(MongoDB\Driver\ReadConcern::LOCAL);
var_dump($rc->bsonSerialize());

echo "\n", MongoDB\BSON\Document::fromPHP($rc)->toRelaxedExtendedJSON();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#2 (1) {
  ["level"]=>
  string(5) "local"
}

{ "level" : "local" }
```

### Veja também

- [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) - Fornece um array ou documento para serializar como BSON
- [» Referência de Preocupação de Leitura](https://www.mongodb.com/docs/manual/reference/read-concern/)

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
