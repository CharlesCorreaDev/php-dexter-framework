# Retorna se a gravação foi reconhecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandresult.isacknowledged.php

---

# MongoDB\Driver\BulkWriteCommandResult::isAcknowledged

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommandResult::isAcknowledged — Retorna se a gravação foi reconhecida

### Descrição

final public function **MongoDB\Driver\BulkWriteCommandResult::isAcknowledged**(): [bool](language.types.boolean.md)

Se a gravação for confirmada, outros campos estarão disponíveis no objeto
[MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a gravação foi confirmada e **`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 **MongoDB\Driver\BulkWriteCommandResult::isAcknowledged()** com preocupação de gravação reconhecida**

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->insertOne('db.coll', ['x' => 1]);

$result = $manager->executeBulkWriteCommand($bulk);

var_dump($result->isAcknowledged());

?>
```

O exemplo acima produzirá:

```
bool(true)
```

**Exemplo #2 **MongoDB\Driver\BulkWriteCommandResult::isAcknowledged()** com preocupação de gravação não reconhecida**

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand(['ordered' => false]);
$bulk->insertOne('db.coll', ['x' => 1]);

$writeConcern = new MongoDB\Driver\WriteConcern(0);

$result = $manager->executeBulkWriteCommand($bulk, ['writeConcern' => $writeConcern]);

var_dump($result->isAcknowledged());

?>
```

O exemplo acima produzirá:

```
bool(false)
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
