# Retorna o número de documentos selecionados para atualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommandresult.getmatchedcount.php

---

# MongoDB\Driver\BulkWriteCommandResult::getMatchedCount

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommandResult::getMatchedCount — Retorna o número de documentos selecionados para atualização

### Descrição

final public function **MongoDB\Driver\BulkWriteCommandResult::getMatchedCount**(): [int](language.types.integer.md)

Se a operação de atualização não resultar em nenhuma alteração no documento (por exemplo, definindo
o valor de um campo para seu valor atual), a contagem correspondente poderá ser maior
que o valor retornado por
[MongoDB\Driver\BulkWriteCommandResult::getModifiedCount()](mongodb-driver-bulkwritecommandresult.getmodifiedcount.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número total de documentos selecionados para atualização por todas as operações.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\LogicException](class.mongodb-driver-exception-logicexception.md) se a escrita não foi reconhecida.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWriteCommandResult::getMatchedCount()****

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;
$bulk->insertOne('db.coll', ['x' => 1]);
$bulk->updateOne('db.coll', ['x' => 1], ['$set' => ['y' => 3]]);
$bulk->updateOne('db.coll', ['x' => 2], ['$set' => ['y' => 1]], ['upsert' => true]);
$bulk->updateOne('db.coll', ['x' => 3], ['$set' => ['y' => 2]], ['upsert' => true]);
$bulk->deleteMany('db.coll', []);

$result = $manager->executeBulkWriteCommand($bulk);

var_dump($result->getMatchedCount());

?>
```

O exemplo acima produzirá:

```
int(1)
```

### Veja também

- [MongoDB\Driver\BulkWriteCommandResult::getModifiedCount()](mongodb-driver-bulkwritecommandresult.getmodifiedcount.md) - Retorna o número de documentos existentes atualizados
- [MongoDB\Driver\BulkWriteCommandResult::getUpdateResults()](mongodb-driver-bulkwritecommandresult.getupdateresults.md) - Retorna resultados detalhados para atualizações bem-sucedidas
- [MongoDB\Driver\BulkWriteCommandResult::isAcknowledged()](mongodb-driver-bulkwritecommandresult.isacknowledged.md) - Retorna se a gravação foi reconhecida

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
