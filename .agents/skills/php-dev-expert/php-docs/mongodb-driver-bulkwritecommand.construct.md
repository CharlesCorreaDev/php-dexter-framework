# Cria um novo BulkWriteCommand

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-bulkwritecommand.construct.php

---

# MongoDB\Driver\BulkWriteCommand::\_\_construct

(mongodb >=2.1.0)

MongoDB\Driver\BulkWriteCommand::\_\_construct — Cria um novo BulkWriteCommand

### Descrição

public function **MongoDB\Driver\BulkWriteCommand::\_\_construct**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**)

Cria um novo [MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md),
que pode ser usado para executar diversas operações de inserção, atualização e exclusão em
várias coleções em uma única solicitação usando o comando
[» bulkWrite](https://www.mongodb.com/docs/manual/reference/command/bulkWrite)
introduzido no MongoDB 8.0. Isso difere de
[MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md), que é suportado por todas
as versões do servidor, mas limitado a uma única coleção.

Após todas as operações de gravação terem sido adicionadas, este objeto pode ser executado com
[MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md).

### Parâmetros

`options` ([array](language.types.array.md))
:   **Opções**

    | Opção | Tipo | Descrição | Padrão |
    | --- | --- | --- | --- |
    | bypassDocumentValidation | [bool](language.types.boolean.md) | Se **`true`**, permite que operações de inserção e atualização contornem a validação em nível de documento. | **`false`** |
    | comment | [mixed](language.types.mixed.md) | Um comentário arbitrário para ajudar a rastrear a operação por meio do profiler do banco de dados, da saída currentOp e dos registros. |
    | let | [array](language.types.array.md)|[object](language.types.object.md) | Mapa de nomes e valores de parâmetros. Os valores devem ser expressões constantes ou fechadas que não fazem referência a campos do documento. Os parâmetros podem então ser acessados como variáveis em um contexto de expressão agregada (por exemplo, `$$var`).  Esta opção está disponível no MongoDB 5.0+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
    | ordered | [bool](language.types.boolean.md) | Se as operações nesta gravação em massa devem ser executadas na ordem em que foram especificadas. Se **`false`**, as gravações continuarão a ser executadas se uma gravação individual falhar. Se **`true`**, as gravações deixarão de ser executadas se uma gravação individual falhar. | **`true`** |
    | verboseResults | [bool](language.types.boolean.md) | Se os resultados detalhados de cada operação bem-sucedida devem ser incluídos no [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md) retornado. | **`false`** |

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\BulkWriteCommand::\_\_construct()****

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

### Veja também

- [MongoDB\Driver\Manager::executeBulkWriteCommand()](mongodb-driver-manager.executebulkwritecommand.md) - Executa operações de gravação usando o comando bulkWrite
- [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)

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
