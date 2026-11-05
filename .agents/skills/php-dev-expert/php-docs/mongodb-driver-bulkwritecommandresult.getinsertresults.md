# Retorna resultados detalhados para inserções bem-sucedidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandresult.getinsertresults.php

---

# MongoDB\Driver\BulkWriteCommandResult::getInsertResults

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommandResult::getInsertResults — Retorna resultados detalhados para inserções bem-sucedidas

### Descrição

final public function **MongoDB\Driver\BulkWriteCommandResult::getInsertResults**(): [?](language.types.null.md)[MongoDB\BSON\Document](class.mongodb-bson-document.md)

Como os campos `_id` para documentos inseridos são gerados
pela extensão quando não são informados explicitamente, o valor de
`insertedId` em cada resultado corresponderá ao valor de retorno de
[MongoDB\Driver\BulkWriteCommand::insertOne()](mongodb-driver-bulkwritecommand.insertone.md) para
a operação de inserção correspondente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um documento contendo o resultado de cada operação de inserção bem-sucedida
ou **`null`** se resultados detalhados não foram solicitados. As chaves do documento
corresponderão ao índice da operação de gravação de
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se a escrita não foi reconhecida.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWriteCommandResult::getInsertResults()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand(['verboseResults' => true]);

$generatedId = $bulk->insertOne('db.coll', ['x' => 1]);

$bulk->updateOne('db.coll', ['x' => 1], ['$set' => ['y' => 3]]);
$bulk->updateOne('db.coll', ['x' => 2], ['$set' => ['y' => 1]], ['upsert' => true]);
$bulk->updateOne('db.coll', ['x' => 3], ['$set' => ['y' => 2]], ['upsert' => true]);
$bulk->deleteMany('db.coll', []);

$result = $manager->executeBulkWriteCommand($bulk);

var_dump($generatedId);

var_dump($result->getInsertResults()->toPHP());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\BSON\ObjectId)#3 (1) {
  ["oid"]=>
  string(24) "67f7ee69783dcce702097b41"
}
object(stdClass)#8 (1) {
  ["0"]=>
  object(stdClass)#7 (1) {
    ["insertedId"]=>
    object(MongoDB\BSON\ObjectId)#6 (1) {
      ["oid"]=>
      string(24) "67f7ee69783dcce702097b41"
    }
  }
}
```

### Veja também

- [MongoDB\Driver\BulkWriteCommandResult::getInsertedCount()](mongodb-driver-bulkwritecommandresult.getinsertedcount.md) - Retorna o número de documentos inseridos
- [MongoDB\Driver\BulkWriteCommandResult::isAcknowledged()](mongodb-driver-bulkwritecommandresult.isacknowledged.md) - Retorna se a gravação foi reconhecida
- [MongoDB\Driver\BulkWriteCommand::insertOne()](mongodb-driver-bulkwritecommand.insertone.md) - Adiciona uma operação insertOne

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
