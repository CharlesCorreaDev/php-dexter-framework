# Retorna quaisquer erros de gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandexception.getwriteerrors.php

---

# MongoDB\Driver\Exception\BulkWriteCommandException::getWriteErrors

(mongodb >=2.1.0)

MongoDB\Driver\Exception\BulkWriteCommandException::getWriteErrors — Retorna quaisquer erros de gravação

### Descrição

final public function **MongoDB\Driver\Exception\BulkWriteCommandException::getWriteErrors**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de quaisquer [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md)s que
ocorreram durante a execução de operações de gravação individuais. As chaves do array
corresponderão ao índice da operação de gravação de
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md). Este mapa
conterá no máximo uma entrada se a gravação em massa tiver sido ordenada.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Exception\BulkWriteCommandException::getWriteErrors()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand(['ordered' => false]);
$bulk->deleteMany('db.coll', []);
$bulk->insertOne('db.coll', ['_id' => 1]);
$bulk->insertOne('db.coll', ['_id' => 1]);
$bulk->insertOne('db.coll', ['_id' => 1]);

try {
    $result = $manager->executeBulkWriteCommand($bulk);
} catch (MongoDB\Driver\Exception\BulkWriteCommandException $e) {
    var_dump($e->getWriteErrors());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  [2]=>
  object(MongoDB\Driver\WriteError)#5 (4) {
    ["message"]=>
    string(78) "E11000 duplicate key error collection: db.coll index: _id_ dup key: { _id: 1 }"
    ["code"]=>
    int(11000)
    ["index"]=>
    int(2)
    ["info"]=>
    object(stdClass)#6 (0) {
    }
  }
  [3]=>
  object(MongoDB\Driver\WriteError)#7 (4) {
    ["message"]=>
    string(78) "E11000 duplicate key error collection: db.coll index: _id_ dup key: { _id: 1 }"
    ["code"]=>
    int(11000)
    ["index"]=>
    int(3)
    ["info"]=>
    object(stdClass)#8 (0) {
    }
  }
}
```

### Veja também

- [MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md) - Executa operações de gravação usando o comando bulkWrite
- [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md)

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
