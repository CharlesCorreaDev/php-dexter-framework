# Executa um comando de banco de dados que lê e grava

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.executereadwritecommand.php

---

# MongoDB\Driver\Manager::executeReadWriteCommand

(mongodb >=1.4.0)

MongoDB\Driver\Manager::executeReadWriteCommand — Executa um comando de banco de dados que lê e grava

### Descrição

final public function **MongoDB\Driver\Manager::executeReadWriteCommand**([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

Executa o comando no servidor primário.

Este método aplicará lógica específica para comandos de leitura e gravação
(por exemplo, [» aggregate](https://www.mongodb.com/docs/manual/reference/command/aggregate/)).
Os valores padrão para as opções `"readConcern"` e
`"writeConcern"` serão inferidos de uma transação
ativa (indicada pela opção `"session"`), seguido
pelo [URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).

### Parâmetros

`db` ([string](language.types.string.md))
:   O nome do banco de dados no qual executar o comando.

`command` ([MongoDB\Driver\Command](class.mongodb-driver-command.md))
:   O comando a ser executado.

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | readConcern | [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md) | Um read concern a ser aplicado à operação.  Esta opção está disponível no MongoDB 3.2+ e resultará em uma exceção em tempo de execução se for especificada para uma versão de servidor mais antiga. |
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
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros (ex.: comando inválido).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.4.4 | [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) será lançada se a opção `"session"` for usada em combinação com uma preocupação de gravação não reconhecida. |

### Veja também

- [MongoDB\Driver\Command](class.mongodb-driver-command.md)
- [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)
- [MongoDB\Driver\Manager::executeCommand()](mongodb-driver-manager.executecommand.md) - Executa um comando de banco de dados
- [MongoDB\Driver\Manager::executeReadCommand()](mongodb-driver-manager.executereadcommand.md) - Executa um comando de banco de dados que faz leitura
- [MongoDB\Driver\Manager::executeWriteCommand()](mongodb-driver-manager.executewritecommand.md) - Executa um comando de banco de dados que escreve
- [MongoDB\Driver\Server::executeReadWriteCommand()](mongodb-driver-server.executereadwritecommand.md) - Executa um comando de banco de dados que lê e grava neste servidor

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
