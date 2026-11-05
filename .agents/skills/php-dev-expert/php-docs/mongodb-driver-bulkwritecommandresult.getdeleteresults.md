# Retorna resultados detalhados para exclusões bem-sucedidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandresult.getdeleteresults.php

---

# MongoDB\Driver\BulkWriteCommandResult::getDeleteResults

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommandResult::getDeleteResults — Retorna resultados detalhados para exclusões bem-sucedidas

### Descrição

final public function **MongoDB\Driver\BulkWriteCommandResult::getDeleteResults**(): [?](language.types.null.md)[MongoDB\BSON\Document](class.mongodb-bson-document.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um documento contendo o resultado de cada operação de exclusão
bem-sucedida, ou **`null`** se resultados detalhados não foram solicitados. As chaves do documento
corresponderão ao índice da operação de gravação de
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se a escrita não foi reconhecida.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWriteCommandResult::getDeleteResults()****

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

var_dump($result->getDeleteResults()->toPHP());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#7 (1) {
  ["4"]=>
  object(stdClass)#6 (1) {
    ["deletedCount"]=>
    object(MongoDB\BSON\Int64)#5 (1) {
      ["integer"]=>
      string(1) "3"
    }
  }
}
```

### Veja também

- [MongoDB\Driver\BulkWriteCommandResult::getDeletedCount()](mongodb-driver-bulkwritecommandresult.getdeletedcount.md) - Retorna o número de documentos excluídos
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
