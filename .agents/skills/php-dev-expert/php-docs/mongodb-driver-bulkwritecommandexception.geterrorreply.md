# Retorna qualquer erro de comando de nível superior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandexception.geterrorreply.php

---

# MongoDB\Driver\Exception\BulkWriteCommandException::getErrorReply

(mongodb >=2.1.0)

MongoDB\Driver\Exception\BulkWriteCommandException::getErrorReply — Retorna qualquer erro de comando de nível superior

### Descrição

final public function **MongoDB\Driver\Exception\BulkWriteCommandException::getErrorReply**(): [?](language.types.null.md)[MongoDB\BSON\Document](class.mongodb-bson-document.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna qualquer erro de nível superior que ocorreu ao tentar se comunicar
com o servidor ou executar a gravação em massa. Este valor pode ser **`null`** se a
exceção foi gerada devido a erros ocorridos em gravações individuais.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Exception\BulkWriteCommandException::getErrorReply()****

```
<?php

$manager = new MongoDB\Driver\Manager;

// Este exemplo usa configureFailPoint para simular um erro de comando de nível superior
$manager->executeCommand('admin', new MongoDB\Driver\Command([
    'configureFailPoint' => 'failCommand',
    'mode' => ['times' => 1],
    'data' => [
        'failCommands' => ['bulkWrite'],
        'errorCode' => 8, /* UnknownError */
    ],
]));

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->insertOne('db.coll', ['x' => 1]);

try {
    $result = $manager->executeBulkWriteCommand($bulk);
} catch (MongoDB\Driver\Exception\BulkWriteCommandException $e) {
    var_dump($e->getErrorReply()?->toPHP());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#12 (6) {
  ["ok"]=>
  float(0)
  ["errmsg"]=>
  string(43) "Failing command via 'failCommand' failpoint"
  ["code"]=>
  int(8)
  ["codeName"]=>
  string(12) "UnknownError"
  ["$clusterTime"]=>
  object(stdClass)#10 (2) {
    ["clusterTime"]=>
    object(MongoDB\BSON\Timestamp)#6 (2) {
      ["increment"]=>
      string(1) "7"
      ["timestamp"]=>
      string(10) "1744319389"
    }
    ["signature"]=>
    object(stdClass)#9 (2) {
      ["hash"]=>
      object(MongoDB\BSON\Binary)#7 (2) {
        ["data"]=>
        string(20) ""
        ["type"]=>
        int(0)
      }
      ["keyId"]=>
      object(MongoDB\BSON\Int64)#8 (1) {
        ["integer"]=>
        string(1) "0"
      }
    }
  }
  ["operationTime"]=>
  object(MongoDB\BSON\Timestamp)#11 (2) {
    ["increment"]=>
    string(1) "7"
    ["timestamp"]=>
    string(10) "1744319389"
  }
}
```

### Veja também

- [MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md) - Executa operações de gravação usando o comando bulkWrite

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
