# Executa um comando de banco de dados que grava neste servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.executewritecommand.php

---

# MongoDB\Driver\Server::executeWriteCommand

(mongodb >=1.4.0)

MongoDB\Driver\Server::executeWriteCommand — Executa um comando de banco de dados que grava neste servidor

### Descrição

final public function **MongoDB\Driver\Server::executeWriteCommand**([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

Executa o comando neste servidor.

Este método aplicará lógica específica para comandos que escrevem (por exemplo,
[» drop](https://www.mongodb.com/docs/manual/reference/command/drop/)).
O valor padrão para a opção `"writeConcern"` será
inferido de uma transação ativa (indicada pela
opção `"session"`), seguida pelo
[URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).

> **Nota**:
>
> Este método não se destina a ser usado para executar comandos
> [» insert](https://www.mongodb.com/docs/manual/reference/command/insert/),
> [» update](https://www.mongodb.com/docs/manual/reference/command/update/)
> ou [» delete](https://www.mongodb.com/docs/manual/reference/command/delete/).
> Os usuários são incentivados a usar
> [MongoDB\Driver\Server::executeBulkWrite()](mongodb-driver-server.executebulkwrite.md) para essas
> operações.

### Parâmetros

`db` ([string](language.types.string.md))
:   O nome do banco de dados no qual executar o comando.

`command` ([MongoDB\Driver\Command](class.mongodb-driver-command.md))
:   O comando a ser executado.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | session | [MongoDB\Driver\Session](class.mongodb-driver-session.md) | Uma sessão para associar à operação. |
    | writeConcern | [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md) | Um write concern a ser aplicado à operação. |

    **Aviso**

    Se uma `"session"` que tem uma transação em andamento
    estiver sendo usada, uma opção `"readConcern"` ou
    `"writeConcern"` não pode ser especificada. Isso resultará em uma
    exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md)
    sendo lançada. Em vez disso, essas duas opções devem ser definidas ao criar
    a transação com
    [MongoDB\Driver\Session::startTransaction()](mongodb-driver-session.starttransaction.md).

### Valor Retornado

Retorna [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) em caso de sucesso.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a opção `"session"` for usada com uma transação associada em combinação com uma opção `"readConcern"` ou `"writeConcern"`.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se a opção `"session"` for usada em combinação com uma preocupação de escrita não confirmada.
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros (por exemplo, comando inválido).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.4.4 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) será lançada se a opção `"session"` for usada em combinação com uma preocupação de gravação não reconhecida. |

### Notas

> **Nota**:
>
> É responsabilidade do invocador garantir que o servidor seja capaz
> de executar a operação de escrita. Por exemplo, executar uma operação de escrita
> em um servidor secundário (excluindo seu banco de dados "local") falhará.

### Veja também

- [MongoDB\Driver\Command](class.mongodb-driver-command.md)
- [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)
- [MongoDB\Driver\Server::executeCommand()](mongodb-driver-server.executecommand.md) - Executa um comando de banco de dados neste servidor
- [MongoDB\Driver\Server::executeReadCommand()](mongodb-driver-server.executereadcommand.md) - Executa um comando de banco de dados que lê neste servidor
- [MongoDB\Driver\Server::executeReadWriteCommand()](mongodb-driver-server.executereadwritecommand.md) - Executa um comando de banco de dados que lê e grava neste servidor
- [MongoDB\Driver\Manager::executeWriteCommand()](mongodb-driver-manager.executewritecommand.md) - Executa um comando de banco de dados que escreve

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
