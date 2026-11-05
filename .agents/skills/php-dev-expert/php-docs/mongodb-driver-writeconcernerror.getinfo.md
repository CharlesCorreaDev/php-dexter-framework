# Retorna documento de metadados para WriteConcernError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeconcernerror.getinfo.php

---

# MongoDB\Driver\WriteConcernError::getInfo

(mongodb >=1.0.0)

MongoDB\Driver\WriteConcernError::getInfo — Retorna documento de metadados para WriteConcernError

### Descrição

final public function **MongoDB\Driver\WriteConcernError::getInfo**(): [?](language.types.null.md)[object](language.types.object.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o documento de metadados para WriteConcernError ou **`null`** se
nenhum metadado estiver disponível.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteConcernError::getInfo()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://rs1.example.com,rs2.example.com/?replicaSet=myReplicaSet");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);

$writeConcern = new MongoDB\Driver\WriteConcern(2, 1);

try {
    $manager->executeBulkWrite('db.collection', $bulk, ['writeConcern' => $writeConcern]);
} catch(MongoDB\Driver\Exception\BulkWriteException $e) {
    var_dump($e->getWriteResult()->getWriteConcernError()->getInfo());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#1 (1) {
  ["wtimeout"]=>
  bool(true)
}
```

### Veja também

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
