# Executa uma ou mais operações de escrita

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.executebulkwrite.php

---

# MongoDB\Driver\Manager::executeBulkWrite

(mongodb >=1.0.0)

MongoDB\Driver\Manager::executeBulkWrite — Executa uma ou mais operações de escrita

### Descrição

final public function **MongoDB\Driver\Manager::executeBulkWrite**([string](language.types.string.md) `$namespace`, [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) `$bulk`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)

Executa uma ou mais operações de escrita no servidor primário.

Um [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) pode ser construído com
uma ou mais operações de escrita de vários tipos (por exemplo, atualizações, exclusões e
inserções). O driver tentará enviar operações do mesmo tipo ao
servidor no menor número possível de solicitações para otimizar viagens de ida e volta.

O valor padrão para a opção `"writeConcern"` será
inferido de uma transação ativa (indicada pela
opção `"session"`), seguida pelo
[URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).

### Parâmetros

`namespace` ([string](language.types.string.md))
:   Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`).

`bulk` ([MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md))
:   As gravações a serem executadas.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | session | [MongoDB\Driver\Session](class.mongodb-driver-session.md) | Uma sessão para associar à operação. |
    | writeConcern | [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) | Um write concern a ser aplicado à operação. |

### Valor Retornado

Retorna [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md) em caso de sucesso.

### Erros/Exceções

- Lança [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `bulk` não contiver operações de escrita.
- Lança [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `bulk` já tiver sido executado. Objetos [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) não podem ser executados múltiplas vezes.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a opção `"session"` for usada em combinação com uma preocupação de escrita não confirmada.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma exceção [MongoDB\Driver\Exception\BulkWriteException](class.mongodb-driver-exception-bulkwriteexception.md) em caso de qualquer falha de escrita (por exemplo, erro de escrita, falha ao aplicar uma preocupação de escrita).
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) no caso de outros erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | O parâmetro `options` não aceita mais uma instância de [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md). |
| PECL mongodb 1.21.0 | Passar um objeto [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) como `options` foi descontinuado e será removido na versão 2.0. |
| PECL mongodb 1.4.4 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) será lançado se a opção `"session"` for usada em combinação com uma preocupação de gravação não reconhecida. |
| PECL mongodb 1.4.0 | O terceiro parâmetro agora é um array `options`. Para compatibilidade com versões anteriores, este parâmetro ainda aceitará um objeto [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md). |
| PECL mongodb 1.3.0 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) agora é lançada se `bulk` não contiver nenhuma operação de escrita. Anteriormente, uma [MongoDB\Driver\Exception\BulkWriteException](class.mongodb-driver-exception-bulkwriteexception.md) era lançada. |

### Examples

**Exemplo #1 Exemplo de **MongoDB\Driver\Manager::executeBulkWrite()****

```
<?php

$bulk = new MongoDB\Driver\BulkWrite();

$bulk->insert(['_id' => 1, 'x' => 1]);
$bulk->insert(['_id' => 2, 'x' => 2]);

$bulk->update(['x' => 2], ['$set' => ['x' => 1]], ['multi' => false, 'upsert' => false]);
$bulk->update(['x' => 3], ['$set' => ['x' => 3]], ['multi' => false, 'upsert' => true]);
$bulk->update(['_id' => 3], ['$set' => ['x' => 3]], ['multi' => false, 'upsert' => true]);

$bulk->insert(['_id' => 4, 'x' => 2]);

$bulk->delete(['x' => 1], ['limit' => 1]);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
$result = $manager->executeBulkWrite('db.collection', $bulk, ['writeConcern' => $writeConcern]);

printf("Inserido(s) %d documento(s)\n", $result->getInsertedCount());
printf("Correspondido(s) %d documento(s)\n", $result->getMatchedCount());
printf("Atualizado(s) %d documento(s)\n", $result->getModifiedCount());
printf("Atualizado(s)/Inserido(s) %d documento(s)\n", $result->getUpsertedCount());
printf("Excluído(s) %d documento(s)\n", $result->getDeletedCount());

foreach ($result->getUpsertedIds() as $index => $id) {
    printf('upsertedId[%d]: ', $index);
    var_dump($id);
}

/* Se a preocupação de escrita não puder ser atendida */
if ($writeConcernError = $result->getWriteConcernError()) {
    printf("%s (%d): %s\n", $writeConcernError->getMessage(), $writeConcernError->getCode(), var_export($writeConcernError->getInfo(), true));
}

/* Se uma escrita não pôde acontecer */
foreach ($result->getWriteErrors() as $writeError) {
    printf("Operation#%d: %s (%d)\n", $writeError->getIndex(), $writeError->getMessage(), $writeError->getCode());
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Inserido(s) 3 documento(s)
Correspondido(s) 1 documento(s)
Atualizado(s) 1 documento(s)
Atualizado(s)/Inserido(s) 2 documento(s)
Excluído(s) 1 documento(s)
upsertedId[3]: object(MongoDB\BSON\ObjectId)#5 (1) {
  ["oid"]=>
  string(24) "54d3adc3ce7a792f4d703756"
}
upsertedId[4]: int(3)
```

### Veja também

- [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md)
- [MongoDB\Driver\WriteResult](class.mongodb-driver-writeresult.md)
- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
- [MongoDB\Driver\Server::executeBulkWrite()](mongodb-driver-server.executebulkwrite.md) - Executa uma ou mais operações de gravação neste servidor

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
