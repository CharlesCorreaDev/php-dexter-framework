# Executa operações de gravação neste servidor usando o comando bulkWrite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.executebulkwritecommand.php

---

# MongoDB\Driver\Server::executeBulkWriteCommand

(mongodb >=2.1.0)

MongoDB\Driver\Server::executeBulkWriteCommand — Executa operações de gravação neste servidor usando o comando bulkWrite

### Descrição

final public function **MongoDB\Driver\Server::executeBulkWriteCommand**([MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md) `$bulk`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)

Executa uma ou mais operações de gravação neste servidor usando o comando
[» bulkWrite](https://www.mongodb.com/docs/manual/reference/command/bulkWrite)
introduzido no MongoDB 8.0.

Um [MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md) pode ser construído
com uma ou mais operações de gravação de tipos variados (por exemplo, inserções, atualizações
e exclusões). Cada operação de gravação pode ter como alvo uma coleção diferente.

O valor padrão para a opção `"writeConcern"` será
inferido a partir de uma transação ativa (indicada pela opção
`"session"`), seguida pelo
[URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).

### Parâmetros

`bulk` ([MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md))
:   O comando de gravações a ser executado.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | session | [MongoDB\Driver\Session](class.mongodb-driver-session.md) | Uma sessão para associar à operação. |
    | writeConcern | [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) | Um write concern a ser aplicado à operação. |

### Valor Retornado

Retorna [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md) em caso de sucesso.

### Erros/Exceções

- Lança [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `bulk` não contiver nenhuma operação de gravação.
- Lança [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se `bulk` já tiver sido executado. Objetos [MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md) não podem ser executados várias vezes.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a opção `"session"` for usada em combinação com uma preocupação de escrita não confirmada.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma exceção [MongoDB\Driver\Exception\BulkWriteCommandException](class.mongodb-driver-exception-bulkwritecommandexception.md) em caso de qualquer falha de escrita (por exemplo, falha no comando, erro de escrita ou de preocupação de escrita)
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros.

### Veja também

- [MongoDB\Driver\BulkWriteCommand](class.mongodb-driver-bulkwritecommand.md)
- [MongoDB\Driver\BulkWriteCommandResult](class.mongodb-driver-bulkwritecommandresult.md)
- [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md)
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
