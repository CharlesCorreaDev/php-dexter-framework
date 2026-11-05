# Retorna a mensagem de erro do WriteConcernError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-writeconcernerror.getmessage.php

---

# MongoDB\Driver\WriteConcernError::getMessage

(mongodb >=1.0.0)

MongoDB\Driver\WriteConcernError::getMessage — Retorna a mensagem de erro do WriteConcernError

### Descrição

final public function **MongoDB\Driver\WriteConcernError::getMessage**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a mensagem de erro do WriteConcernError.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\WriteConcernError::getMessage()****

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://rs1.example.com,rs2.example.com/?replicaSet=myReplicaSet");

$bulk = new MongoDB\Driver\BulkWrite;
$bulk->insert(['x' => 1]);

$writeConcern = new MongoDB\Driver\WriteConcern(2, 1);

try {
    $manager->executeBulkWrite('db.collection', $bulk, ['writeConcern' => $writeConcern]);
} catch(MongoDB\Driver\Exception\BulkWriteException $e) {
    var_dump($e->getWriteResult()->getWriteConcernError()->getMessage());
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(33) "waiting for replication timed out"
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
