# Retorna o WriteResult para a operação de escrita com falha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwriteexception.getwriteresult.php

---

# MongoDB\Driver\Exception\BulkWriteException::getWriteResult

(mongodb >= 1.0.0)

MongoDB\Driver\Exception\BulkWriteException::getWriteResult — Retorna o WriteResult para a operação de escrita com falha

### Descrição

final public function **MongoDB\Driver\Exception\BulkWriteException::getWriteResult**(): [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)

Retorna o [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md) para a operação de escrita com falha.
Os métodos
[MongoDB\Driver\WriteResult::getWriteErrors()](mongodb-driver-writeresult.getwriteerrors.md) e
[MongoDB\Driver\WriteResult::getWriteConcernError()](mongodb-driver-writeresult.getwriteconcernerror.md)
podem ser usados ​​para obter mais detalhes sobre a falha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md) para a operação de escrita
com falha.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Exception\BulkWriteException::getWriteResult()****

```
<?php

$manager = new MongoDB\Driver\Manager('mongodb://localhost');
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['_id' => 1]);
$bulk->insert(['_id' => 1]);

try {
    $manager->executeBulkWrite('db.collection', $bulk);
} catch (MongoDB\Driver\Exception\BulkWriteException $e) {
    $writeResult = $e->getWriteResult();

    if ($writeConcernError = $writeResult->getWriteConcernError()) {
        var_dump($writeConcernError);
    }

    if ($writeErrors = $writeResult->getWriteErrors()) {
        var_dump($writeErrors);
    }
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  object(MongoDB\Driver\WriteError)#5 (4) {
    ["message"]=>
    string(70) "E11000 duplicate key error index: db.collection.$_id_ dup key: { : 1 }"
    ["code"]=>
    int(11000)
    ["index"]=>
    int(1)
    ["info"]=>
    NULL
  }
}
```

### Veja também

- [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)
- [MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md) - Executa uma ou mais operações de escrita

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
