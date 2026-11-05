# Retorna um array de identificadores para documentos inseridos por atualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeresult.getupsertedids.php

---

# MongoDB\Driver\WriteResult::getUpsertedIds

(mongodb >=1.0.0)

MongoDB\Driver\WriteResult::getUpsertedIds — Retorna um array de identificadores para documentos inseridos por atualização

### Descrição

final public function **MongoDB\Driver\WriteResult::getUpsertedIds**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de identificadores (ou seja, valores de campo `"_id"`)
para documentos inseridos por atualização. As chaves do array corresponderão ao índice da
operação de gravação (de [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md))
responsável pela inserção de atualização.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteResult::getUpsertedIds()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);
$bulk->update(['x' => 1], ['$set' => ['y' => 3]]);
$bulk->update(['x' => 2], ['$set' => ['y' => 1]], ['upsert' => true]);
$bulk->update(['x' => 3], ['$set' => ['y' => 2]], ['upsert' => true]);
$bulk->delete(['x' => 1]);

$result = $manager->executeBulkWrite('db.collection', $bulk);

var_dump($result->getUpsertedIds());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  [2]=>
  object(MongoDB\BSON\ObjectId)#4 (1) {
    ["oid"]=>
    string(24) "580e62a224f2302f191b880b"
  }
  [3]=>
  object(MongoDB\BSON\ObjectId)#5 (1) {
    ["oid"]=>
    string(24) "580e62a224f2302f191b880c"
  }
}
```

### Veja também

- [MongoDB\Driver\WriteResult::getUpsertedCount()](mongodb-driver-writeresult.getupsertedcount.md) - Retorna o número de documentos inseridos por uma inserção de atualização
- [MongoDB\Driver\WriteResult::isAcknowledged()](mongodb-driver-writeresult.isacknowledged.md) - Retorna se a gravação foi reconhecida

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
