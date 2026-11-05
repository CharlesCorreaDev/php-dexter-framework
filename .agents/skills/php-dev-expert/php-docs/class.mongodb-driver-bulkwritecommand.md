# A classe MongoDB\Driver\BulkWriteCommand

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-bulkwritecommand.php

---

# A classe MongoDB\Driver\BulkWriteCommand

(mongodb >=2.1.0)

## Introdução

**MongoDB\Driver\BulkWriteCommand** coleta uma ou mais
operações de gravação que devem ser enviadas ao servidor usando o comando
[» bulkWrite](https://www.mongodb.com/docs/manual/reference/command/bulkWrite)
introduzido no MongoDB 8.0. Após adicionar qualquer número de operações de inserção,
atualização e exclusão, o comando pode ser executado via
[MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md).

Ao contrário de [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md), onde todas as operações de gravação
devem ter como alvo a mesma coleção, cada operação de gravação dentro de
**MongoDB\Driver\BulkWriteCommand** pode ter como alvo uma
coleção diferente.

As operações de gravação podem ser ordenadas (padrão) ou não ordenadas. As operações de gravação ordenadas
são enviadas ao servidor, na ordem fornecida, para execução
em série. Se uma gravação falhar, as operações restantes serão abortadas.
As operações não ordenadas são enviadas ao servidor em uma ordem arbitrária
onde podem ser executadas em paralelo. Quaisquer erros que ocorram são reportados
após todas as operações terem sido tentadas.

## Resumo da classe

final

class **MongoDB\Driver\BulkWriteCommand**
implements
[Countable](class.countable.md) {

/\* Métodos \*/

public function [\_\_construct](mongodb-driver-bulkwritecommand.construct.md)([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**)

public function [count](mongodb-driver-bulkwritecommand.count.md)(): [int](language.types.integer.md)

public function [deleteMany](mongodb-driver-bulkwritecommand.deletemany.md)([string](language.types.string.md) `$namespace`, [array](language.types.array.md)|[object](language.types.object.md) `$filter`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [void](language.types.void.md)

public function [deleteOne](mongodb-driver-bulkwritecommand.deleteone.md)([string](language.types.string.md) `$namespace`, [array](language.types.array.md)|[object](language.types.object.md) `$filter`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [void](language.types.void.md)

public function [insertOne](mongodb-driver-bulkwritecommand.insertone.md)([string](language.types.string.md) `$namespace`, [array](language.types.array.md)|[object](language.types.object.md) `$document`): [mixed](language.types.mixed.md)

public function [replaceOne](mongodb-driver-bulkwritecommand.replaceone.md)(  
    [string](language.types.string.md) `$namespace`,  
    [array](language.types.array.md)|[object](language.types.object.md) `$filter`,  
    [array](language.types.array.md)|[object](language.types.object.md) `$replacement`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): [void](language.types.void.md)

public function [updateMany](mongodb-driver-bulkwritecommand.updatemany.md)(  
    [string](language.types.string.md) `$namespace`,  
    [array](language.types.array.md)|[object](language.types.object.md) `$filter`,  
    [array](language.types.array.md)|[object](language.types.object.md) `$update`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): [void](language.types.void.md)

public function [updateOne](mongodb-driver-bulkwritecommand.updateone.md)(  
    [string](language.types.string.md) `$namespace`,  
    [array](language.types.array.md)|[object](language.types.object.md) `$filter`,  
    [array](language.types.array.md)|[object](language.types.object.md) `$update`,  
    [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**  
): [void](language.types.void.md)

}

## Examples

**Exemplo #1 Operações de gravação mistas**

Operações de gravação mistas (ou seja, inserções, atualizações e exclusões) serão enviadas
para o servidor usando um único
comando
[» bulkWrite](https://www.mongodb.com/docs/manual/reference/command/bulkWrite).

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;

// Exclui documentos de ambas as coleções
$bulk->deleteMany('db.coll_one', []);
$bulk->deleteMany('db.coll_two', []);

// Insere documentos em duas coleções
$bulk->insertOne('db.coll_one', ['_id' => 1]);
$bulk->insertOne('db.coll_two', ['_id' => 2]);
$bulk->insertOne('db.coll_two', ['_id' => 3]);

// Atualiza um documento em "coll_one"
$bulk->updateOne('db.coll_one', ['_id' => 1], ['$set' => ['x' => 1]]);

$result = $manager->executeBulkWriteCommand($bulk);

printf("Inserido(s) %d documento(s)\n", $result->getInsertedCount());
printf("Atualizado(s) %d documento(s)\n", $result->getModifiedCount());

?>
```

O exemplo acima produzirá:

```
Inserido(s) 3 documento(s)
Atualizado(s) 1 documento(s)
```

**Exemplo #2 Operações de gravação ordenadas causando um erro**

```
<?php

$manager = new MongoDB\Driver\Manager;

$bulk = new MongoDB\Driver\BulkWriteCommand;

$bulk->deleteMany('db.coll', []);
$bulk->insertOne('db.coll', ['_id' => 1]);
$bulk->insertOne('db.coll', ['_id' => 2]);
$bulk->insertOne('db.coll', ['_id' => 1]);
$bulk->insertOne('db.coll', ['_id' => 3]);

try {
    $result = $manager->executeBulkWriteCommand($bulk);
} catch (MongoDB\Driver\Exception\BulkWriteCommandException $e) {
    $result = $e->getPartialResult();

    var_dump($e->getWriteErrors());
}

printf("Inserido(s) %d documento(s)\n", $result->getInsertedCount());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [3]=>
  object(MongoDB\Driver\WriteError)#5 (4) {
    ["message"]=>
    string(78) "E11000 duplicate key error collection: db.coll index: _id_ dup key: { _id: 1 }"
    ["code"]=>
    int(11000)
    ["index"]=>
    int(3)
    ["info"]=>
    object(stdClass)#6 (0) {
    }
  }
}
Inserido(s) 2 documento(s)
```

## Veja também

- [MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md)
- [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)
- [MongoDB\Driver\Exception\BulkWriteCommandException](class.mongodb-driver-exception-bulkwritecommandexception.md)
- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
- [MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md)
- [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md)

## Índice

- [MongoDB\Driver\BulkWriteCommand::\_\_construct](mongodb-driver-bulkwritecommand.construct.md) — Cria um novo BulkWriteCommand
- [MongoDB\Driver\BulkWriteCommand::count](mongodb-driver-bulkwritecommand.count.md) — Conta o número de operações de gravação no BulkWriteCommand
- [MongoDB\Driver\BulkWriteCommand::deleteMany](mongodb-driver-bulkwritecommand.deletemany.md) — Adiciona uma operação deleteMany
- [MongoDB\Driver\BulkWriteCommand::deleteOne](mongodb-driver-bulkwritecommand.deleteone.md) — Adiciona uma operação deleteOne
- [MongoDB\Driver\BulkWriteCommand::insertOne](mongodb-driver-bulkwritecommand.insertone.md) — Adiciona uma operação insertOne
- [MongoDB\Driver\BulkWriteCommand::replaceOne](mongodb-driver-bulkwritecommand.replaceone.md) — Adiciona uma operação replaceOne
- [MongoDB\Driver\BulkWriteCommand::updateMany](mongodb-driver-bulkwritecommand.updatemany.md) — Adiciona uma operação updateMany
- [MongoDB\Driver\BulkWriteCommand::updateOne](mongodb-driver-bulkwritecommand.updateone.md) — Adiciona uma operação updateOne

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
