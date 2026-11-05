# Retorna resultados detalhados para atualizações bem-sucedidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandresult.getupdateresults.php

---

# MongoDB\Driver\BulkWriteCommandResult::getUpdateResults

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommandResult::getUpdateResults — Retorna resultados detalhados para atualizações bem-sucedidas

### Descrição

final public function **MongoDB\Driver\BulkWriteCommandResult::getUpdateResults**(): [?](language.types.null.md)[MongoDB\BSON\Document](class.mongodb-bson-document.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um documento contendo o resultado de cada operação de atualização bem-sucedida
ou **`null`** se resultados detalhados não foram solicitados. As chaves do documento
corresponderão ao índice da operação de gravação de
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se a escrita não foi reconhecida.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWriteCommandResult::getUpdateResults()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand(['verboseResults' => true]);
$bulk->insertOne('db.coll', ['x' => 1]);
$bulk->updateOne('db.coll', ['x' => 1], ['$set' => ['y' => 3]]);
$bulk->updateOne('db.coll', ['x' => 2], ['$set' => ['y' => 1]], ['upsert' => true]);
$bulk->updateOne('db.coll', ['x' => 3], ['$set' => ['y' => 2]], ['upsert' => true]);
$bulk->deleteMany('db.coll', []);

$result = $manager->executeBulkWriteCommand($bulk);

var_dump($result->getUpdateResults()->toPHP());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#16 (3) {
  ["1"]=>
  object(stdClass)#7 (2) {
    ["matchedCount"]=>
    object(MongoDB\BSON\Int64)#5 (1) {
      ["integer"]=>
      string(1) "1"
    }
    ["modifiedCount"]=>
    object(MongoDB\BSON\Int64)#6 (1) {
      ["integer"]=>
      string(1) "1"
    }
  }
  ["2"]=>
  object(stdClass)#11 (3) {
    ["matchedCount"]=>
    object(MongoDB\BSON\Int64)#8 (1) {
      ["integer"]=>
      string(1) "1"
    }
    ["modifiedCount"]=>
    object(MongoDB\BSON\Int64)#9 (1) {
      ["integer"]=>
      string(1) "0"
    }
    ["upsertedId"]=>
    object(MongoDB\BSON\ObjectId)#10 (1) {
      ["oid"]=>
      string(24) "67f7eb9b1f198bbcb880d575"
    }
  }
  ["3"]=>
  object(stdClass)#15 (3) {
    ["matchedCount"]=>
    object(MongoDB\BSON\Int64)#12 (1) {
      ["integer"]=>
      string(1) "1"
    }
    ["modifiedCount"]=>
    object(MongoDB\BSON\Int64)#13 (1) {
      ["integer"]=>
      string(1) "0"
    }
    ["upsertedId"]=>
    object(MongoDB\BSON\ObjectId)#14 (1) {
      ["oid"]=>
      string(24) "67f7eb9b1f198bbcb880d576"
    }
  }
}
```

### Veja também

- [MongoDB\Driver\BulkWriteCommandResult::getMatchedCount()](mongodb-driver-bulkwritecommandresult.getmatchedcount.md) - Retorna o número de documentos selecionados para atualização
- [MongoDB\Driver\BulkWriteCommandResult::getModifiedCount()](mongodb-driver-bulkwritecommandresult.getmodifiedcount.md) - Retorna o número de documentos existentes atualizados
- [MongoDB\Driver\BulkWriteCommandResult::getUpsertedCount()](mongodb-driver-bulkwritecommandresult.getupsertedcount.md) - Retorna o número de documentos inseridos ou atualizados
- [MongoDB\Driver\BulkWriteCommandResult::isAcknowledged()](mongodb-driver-bulkwritecommandresult.isacknowledged.md) - Retorna se a gravação foi reconhecida

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
