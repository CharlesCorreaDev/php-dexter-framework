# Retorna qualquer erro de gravação ocorrido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeresult.getwriteconcernerror.php

---

# MongoDB\Driver\WriteResult::getWriteConcernError

(mongodb >=1.0.0)

MongoDB\Driver\WriteResult::getWriteConcernError — Retorna qualquer erro de gravação ocorrido

### Descrição

final public function **MongoDB\Driver\WriteResult::getWriteConcernError**(): [?](language.types.null.md)[MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md) se um erro de preocupação
de gravação foi encontrado durante a operação de gravação ou **`null`**
caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteResult::getWriteConcernError()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://rs1.example.com,rs2.example.com/?replicaSet=myReplicaSet");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);

$writeConcern = new MongoDB\Driver\WriteConcern(2, 1);

try {
    $manager->executeBulkWrite('db.collection', $bulk, ['writeConcern' => $writeConcern]);
} catch(MongoDB\Driver\Exception\BulkWriteException $e) {
    var_dump($e->getWriteResult()->getWriteConcernError());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\Driver\WriteConcernError)#6 (3) {
  ["message"]=>
  string(33) "waiting for replication timed out"
  ["code"]=>
  int(64)
  ["info"]=>
  object(stdClass)#7 (1) {
    ["wtimeout"]=>
    bool(true)
  }
}
```

### Veja também

- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
- [» Referência de Preocupação de Gravação](https://www.mongodb.com/docs/manual/reference/write-concern/)

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
