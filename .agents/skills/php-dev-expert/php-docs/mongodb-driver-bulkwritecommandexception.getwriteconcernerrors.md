# Retorna quaisquer erros de preocupação de gravação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandexception.getwriteconcernerrors.php

---

# MongoDB\Driver\Exception\BulkWriteCommandException::getWriteConcernErrors

(mongodb >=2.1.0)

MongoDB\Driver\Exception\BulkWriteCommandException::getWriteConcernErrors — Retorna quaisquer erros de preocupação de gravação

### Descrição

final public function **MongoDB\Driver\Exception\BulkWriteCommandException::getWriteConcernErrors**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de quaisquer [MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md)
que ocorreram durante a execução da gravação em massa. Esta lista pode ter vários
itens se mais de um comando de servidor foi necessário para executar a gravação
em massa.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Exception\BulkWriteCommandException::getWriteConcernErrors()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->insertOne('db.coll', ['x' => 1]);

$writeConcern = new MongoDB\Driver\WriteConcern(50);

try {
    $result = $manager->executeBulkWriteCommand($bulk, ['writeConcern' => $writeConcern]);
} catch (MongoDB\Driver\Exception\BulkWriteCommandException $e) {
    var_dump($e->getWriteConcernErrors());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [0]=>
  object(MongoDB\Driver\WriteConcernError)#6 (3) {
    ["message"]=>
    string(29) "Not enough data-bearing nodes"
    ["code"]=>
    int(100)
    ["info"]=>
    object(stdClass)#8 (1) {
      ["writeConcern"]=>
      object(stdClass)#7 (3) {
        ["w"]=>
        int(50)
        ["wtimeout"]=>
        int(0)
        ["provenance"]=>
        string(14) "clientSupplied"
      }
    }
  }
}
```

### Veja também

- [MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md) - Executa operações de gravação usando o comando bulkWrite
- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
- [MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md)

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
