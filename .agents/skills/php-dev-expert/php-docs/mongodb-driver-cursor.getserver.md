# Retorna o servidor associado a este cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.getserver.php

---

# MongoDB\Driver\Cursor::getServer

(mongodb >=1.0.0)

MongoDB\Driver\Cursor::getServer — Retorna o servidor associado a este cursor

### Descrição

final public function **MongoDB\Driver\Cursor::getServer**(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) associado a este
cursor. Este é o servidor que executou a
[MongoDB\Driver\Query](class.mongodb-driver-query.md) ou o
[MongoDB\Driver\Command](class.mongodb-driver-command.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) associado a este
cursor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Cursor::getServer()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$query = new MongoDB\Driver\Query([]);

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);
$manager->executeBulkWrite('db.collection', $bulk);

$cursor = $manager->executeQuery('db.collection', $query);
var_dump($cursor->getServer());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\Driver\Server)#5 (10) {
  ["host"]=>
  string(9) "localhost"
  ["port"]=>
  int(27017)
  ["type"]=>
  int(1)
  ["is_primary"]=>
  bool(false)
  ["is_secondary"]=>
  bool(false)
  ["is_arbiter"]=>
  bool(false)
  ["is_hidden"]=>
  bool(false)
  ["is_passive"]=>
  bool(false)
  ["last_hello_response"]=>
  array(8) {
    ["isWritablePrimary"]=>
    bool(true)
    ["maxBsonObjectSize"]=>
    int(16777216)
    ["maxMessageSizeBytes"]=>
    int(48000000)
    ["maxWriteBatchSize"]=>
    int(1000)
    ["localTime"]=>
    object(MongoDB\BSON\UTCDateTime)#6 (1) {
      ["milliseconds"]=>
      int(1446505367907)
    }
    ["maxWireVersion"]=>
    int(3)
    ["minWireVersion"]=>
    int(0)
    ["ok"]=>
    float(1)
  }
  ["round_trip_time"]=>
  int(584)
}
```

### Veja também

- [MongoDB\Driver\Server](class.mongodb-driver-server.md)

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
