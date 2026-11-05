# A classe MongoDB\Driver\BulkWrite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-bulkwrite.php

---

# A classe MongoDB\Driver\BulkWrite

(mongodb >=1.0.0)

## Introdução

A classe **MongoDB\Driver\BulkWrite** coleta uma ou mais
operações de gravação que devem ser enviadas ao servidor. Depois de adicionar qualquer
número de operações de inserção, atualização e exclusão, a coleção pode ser
executada via
[MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md).

As operações de gravação podem ser ordenadas (padrão) ou não ordenadas. As operações
de gravação ordenadas são enviadas ao servidor, na ordem fornecida, para execução
serial. Se uma gravação falhar, todas as operações restantes serão abortadas.
As operações não ordenadas são enviadas ao servidor em uma ordem arbitrária,
onde podem ser executadas em paralelo. Quaisquer erros que ocorram são relatados
após todas as operações terem sido tentadas.

## Resumo da classe

final

class **MongoDB\Driver\BulkWrite**
implements
[Countable](class.countable.md) {

/\* Métodos \*/

public function [\_\_construct](mongodb-driver-bulkwrite.construct.md)([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**)

public function [count](mongodb-driver-bulkwrite.count.md)(): [int](language.types.integer.md)

public function [delete](mongodb-driver-bulkwrite.delete.md)([array](language.types.array.md)|[object](language.types.object.md) `$filter`, [?](language.types.null.md)[array](language.types.array.md) `$deleteOptions` = **`null`**): [void](language.types.void.md)

public function [insert](mongodb-driver-bulkwrite.insert.md)([array](language.types.array.md)|[object](language.types.object.md) `$document`): [mixed](language.types.mixed.md)

public function [update](mongodb-driver-bulkwrite.update.md)([array](language.types.array.md)|[object](language.types.object.md) `$filter`, [array](language.types.array.md)|[object](language.types.object.md) `$newObj`, [?](language.types.null.md)[array](language.types.array.md) `$updateOptions` = **`null`**): [void](language.types.void.md)

}

## Examples

**Exemplo #1 As operações de gravação mistas são agrupadas por tipo**

Operações de gravação mistas (ou seja, inserções, atualizações e exclusões) serão
agrupados em comandos de gravação para serem enviados sequencialmente ao servidor.

```
<?php

$bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
$bulk->insert(['_id' => 1, 'x' => 1]);
$bulk->insert(['_id' => 2, 'x' => 2]);
$bulk->update(['x' => 2], ['$set' => ['x' => 1]]);
$bulk->insert(['_id' => 3, 'x' => 3]);
$bulk->delete(['x' => 1]);

?>
```

Resultará na execução de quatro comandos de gravação (ou seja, ida e volta). Como
as operações são ordenadas, a terceira inserção não pode ser enviada até que a
atualização anterior seja executada.

**Exemplo #2 Operações de gravação ordenadas causando um erro**

```
<?php

$bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
$bulk->delete([]);
$bulk->insert(['_id' => 1]);
$bulk->insert(['_id' => 2]);
$bulk->insert(['_id' => 3, 'hello' => 'world']);
$bulk->update(['_id' => 3], ['$set' => ['hello' => 'earth']]);
$bulk->insert(['_id' => 4, 'hello' => 'pluto']);
$bulk->update(['_id' => 4], ['$set' => ['hello' => 'moon']]);
$bulk->insert(['_id' => 3]);
$bulk->insert(['_id' => 4]);
$bulk->insert(['_id' => 5]);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

try {
    $result = $manager->executeBulkWrite('db.collection', $bulk, ['writeConcern' => $writeConcern]);
} catch (MongoDB\Driver\Exception\BulkWriteException $e) {
    $result = $e->getWriteResult();

    // Verifica se a preocupação de gravação não pôde ser atendida
    if ($writeConcernError = $result->getWriteConcernError()) {
        printf("%s (%d): %s\n",
            $writeConcernError->getMessage(),
            $writeConcernError->getCode(),
            var_export($writeConcernError->getInfo(), true)
        );
    }

    // Verifica se alguma operação de gravação não foi concluída
    foreach ($result->getWriteErrors() as $writeError) {
        printf("Operação#%d: %s (%d)\n",
            $writeError->getIndex(),
            $writeError->getMessage(),
            $writeError->getCode()
        );
    }
} catch (MongoDB\Driver\Exception\Exception $e) {
    printf("Outro erro: %s\n", $e->getMessage());
    exit;
}

printf("Inseridos %d documentos\n", $result->getInsertedCount());
printf("Atualizados %d documentos\n", $result->getModifiedCount());

?>
```

O exemplo acima produzirá:

```
Operação#7: E11000 duplicate key error index: db.collection.$_id_ dup key: { : 3 } (11000)
Inseridos 4 documentos
Atualizados 2 documentos
```

Se a preocupação de gravação não pudesse ser atendida, o exemplo acima geraria
algo como:

```
waiting for replication timed out (64): array (
  'wtimeout' => true,
)
Operação#7: E11000 duplicate key error index: databaseName.collectionName.$_id_ dup key: { : 3 } (11000)
Inseridos 4 documentos
Atualizados 2 documentos
```

Se for executado o exemplo acima, mas permitindo gravações não ordenadas:

```
<?php

$bulk = new MongoDB\Driver\BulkWrite(['ordered' => false]);
/* ... */

?>
```

O exemplo acima produzirá:

```
Operação#7: E11000 duplicate key error index: db.collection.$_id_ dup key: { : 3 } (11000)
Operação#8: E11000 duplicate key error index: db.collection.$_id_ dup key: { : 4 } (11000)
Inseridos 5 documentos
Atualizados 2 documentos
```

## Veja também

- [MongoDB\Driver\Manager::executeBulkWrite()](mongodb-driver-manager.executebulkwrite.md)
- [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)
- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
- [MongoDB\Driver\WriteConcernError](class.mongodb-driver-writeconcernerror.md)
- [MongoDB\Driver\WriteError](class.mongodb-driver-writeerror.md)

## Índice

- [MongoDB\Driver\BulkWrite::\_\_construct](mongodb-driver-bulkwrite.construct.md) — Cria um novo BulkWrite
- [MongoDB\Driver\BulkWrite::count](mongodb-driver-bulkwrite.count.md) — Conta o número de operações de escrita em massa
- [MongoDB\Driver\BulkWrite::delete](mongodb-driver-bulkwrite.delete.md) — Adiciona uma operação de remoção ao objeto de escrita em massa
- [MongoDB\Driver\BulkWrite::insert](mongodb-driver-bulkwrite.insert.md) — Adiciona uma operação de inserção ao objeto de escrita em massa
- [MongoDB\Driver\BulkWrite::update](mongodb-driver-bulkwrite.update.md) — Adiciona uma operação de atualização ao objeto de escrita em massa

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
