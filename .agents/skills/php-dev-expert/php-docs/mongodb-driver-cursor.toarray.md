# Retorna um array contendo todos os resultados deste cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.toarray.php

---

# MongoDB\Driver\Cursor::toArray

(mongodb >=1.0.0)

MongoDB\Driver\Cursor::toArray — Retorna um array contendo todos os resultados deste cursor

### Descrição

final public function **MongoDB\Driver\Cursor::toArray**(): [array](language.types.array.md)

Itera o cursor e retorna seus resultados em um array.
A função [MongoDB\Driver\Cursor::setTypeMap()](mongodb-driver-cursor.settypemap.md) pode ser usada para controlar
como os documentos são desserializados em valores PHP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) contendo todos os resultados deste cursor.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Cursor::toArray()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);
$bulk->insert(['x' => 2]);
$bulk->insert(['x' => 3]);
$manager->executeBulkWrite('db.collection', $bulk);

$query = new MongoDB\Driver\Query([]);
$cursor = $manager->executeQuery('db.collection', $query);

var_dump($cursor->toArray());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  object(stdClass)#6 (2) {
    ["_id"]=>
    object(MongoDB\BSON\ObjectId)#5 (1) {
      ["oid"]=>
      string(24) "564259a96118fd40b41bcf61"
    }
    ["x"]=>
    int(1)
  }
  [1]=>
  object(stdClass)#8 (2) {
    ["_id"]=>
    object(MongoDB\BSON\ObjectId)#7 (1) {
      ["oid"]=>
      string(24) "564259a96118fd40b41bcf62"
    }
    ["x"]=>
    int(2)
  }
  [2]=>
  object(stdClass)#10 (2) {
    ["_id"]=>
    object(MongoDB\BSON\ObjectId)#9 (1) {
      ["oid"]=>
      string(24) "564259a96118fd40b41bcf63"
    }
    ["x"]=>
    int(3)
  }
}
```

### Veja também

- [MongoDB\Driver\Cursor::setTypeMap()](mongodb-driver-cursor.settypemap.md) - Define um mapa de tipos a ser usado para desserialização BSON

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
