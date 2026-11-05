# Conta o número de operações de gravação no BulkWriteCommand

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommand.count.php

---

# MongoDB\Driver\BulkWriteCommand::count

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommand::count — Conta o número de operações de gravação no BulkWriteCommand

### Descrição

public function **MongoDB\Driver\BulkWriteCommand::count**(): [int](language.types.integer.md)

Retorna o número de operações de gravação adicionadas ao objeto
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de operações de gravação adicionadas ao objeto
[MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWriteCommand::count()****

```
<?php

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->insertOne('db.coll', ['_id' => 1, 'x' => 1]);
$bulk->insertOne('db.coll', ['_id' => 2, 'x' => 2]);
$bulk->updateOne('db.coll', ['x' => 2], ['$set' => ['x' => 1]]);
$bulk->deleteMany('db.coll', ['x' => 1]);

var_dump(count($bulk));

?>
```

O exemplo acima produzirá:

```
int(4)
```

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
