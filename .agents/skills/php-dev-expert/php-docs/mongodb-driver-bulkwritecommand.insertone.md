# Adiciona uma operação insertOne

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommand.insertone.php

---

# MongoDB\Driver\BulkWriteCommand::insertOne

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommand::insertOne — Adiciona uma operação insertOne

### Descrição

public function **MongoDB\Driver\BulkWriteCommand::insertOne**([string](language.types.string.md) `$namespace`, [array](language.types.array.md)|[object](language.types.object.md) `$document`): [mixed](language.types.mixed.md)

Adiciona uma operação insertOne ao
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md). O documento será
inserido na coleção identificada por
`namespace`.

### Parâmetros

`namespace` ([string](language.types.string.md))
:   Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`).

`document` ([array](language.types.array.md)|[object](language.types.object.md))
:   Um documento para inserir.

### Valor Retornado

Retorna o `_id` do documento inserido. Se o
`document` não tiver um `_id`, o
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) gerado para a inserção será
retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWriteCommand::insertOne()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;

$doc1 = ['x' => 1];
$doc2 = ['_id' => 'custom-id', 'x' => 2];
$doc3 = ['_id' => new MongoDB\BSON\ObjectId('0123456789abcdef01234567'), 'x' => 3];

$id1 = $bulk->insertOne('db.coll', $doc1);
$id2 = $bulk->insertOne('db.coll', $doc2);
$id3 = $bulk->insertOne('db.coll', $doc3);

var_dump($id1, $id2, $id3);

$result = $manager->executeBulkWriteCommand($bulk);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(MongoDB\BSON\ObjectId)#3 (1) {
  ["oid"]=>
  string(24) "67f58058d1a0aa2fd80d55d0"
}
string(9) "custom-id"
object(MongoDB\BSON\ObjectId)#4 (1) {
  ["oid"]=>
  string(24) "0123456789abcdef01234567"
}
```

### Veja também

- [MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md) - Executa operações de gravação usando o comando bulkWrite
- [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)
- [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

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
