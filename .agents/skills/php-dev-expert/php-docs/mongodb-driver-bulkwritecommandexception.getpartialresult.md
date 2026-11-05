# Retorna o resultado de qualquer operação de gravação bem-sucedida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandexception.getpartialresult.php

---

# MongoDB\Driver\Exception\BulkWriteCommandException::getPartialResult

(mongodb >=2.1.0)

MongoDB\Driver\Exception\BulkWriteCommandException::getPartialResult — Retorna o resultado de qualquer operação de gravação bem-sucedida

### Descrição

final public function **MongoDB\Driver\Exception\BulkWriteCommandException::getPartialResult**(): [?](language.types.null.md)[MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)
relatando o resultado de quaisquer operações bem-sucedidas que foram executadas antes
do erro ser encontrado. O valor de retorno será **`null`** se não for possível
determinar que pelo menos uma gravação foi realizada com sucesso (e
reconhecida).

### Examples

**Exemplo #1 Resultado parcial se pelo menos uma gravação for bem-sucedida**

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->deleteMany('db.coll', []);
$bulk->insertOne('db.coll', ['_id' => 1]);
$bulk->insertOne('db.coll', ['_id' => 1]);

try {
    $result = $manager->executeBulkWriteCommand($bulk);
} catch (MongoDB\Driver\Exception\BulkWriteCommandException $e) {
    $result = $e->getPartialResult();
}

var_dump($result?->getInsertedCount());

?>
```

O exemplo acima produzirá:

```
int(1)
```

**Exemplo #2 Nenhum resultado parcial se nenhuma gravação for bem-sucedida**

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->deleteMany('db.coll', []);
$bulk->insertOne('db.coll', ['_id' => 1]);
$manager->executeBulkWriteCommand($bulk);

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->insertOne('db.coll', ['_id' => 1]);

try {
    $result = $manager->executeBulkWriteCommand($bulk);
} catch (MongoDB\Driver\Exception\BulkWriteCommandException $e) {
    $result = $e->getPartialResult();
}

var_dump($result?->getInsertedCount());

?>
```

O exemplo acima produzirá:

```
NULL
```

### Veja também

- [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)
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
