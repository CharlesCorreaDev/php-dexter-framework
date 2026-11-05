# Executa um comando de banco de dados que lê neste servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-server.executereadcommand.php

---

# MongoDB\Driver\Server::executeReadCommand

(mongodb >=1.4.0)

MongoDB\Driver\Server::executeReadCommand — Executa um comando de banco de dados que lê neste servidor

### Descrição

final public function **MongoDB\Driver\Server::executeReadCommand**([string](language.types.string.md) `$db`, [MongoDB\Driver\Command](class.mongodb-driver-command.md) `$command`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)

Executa o comando neste servidor, independentemente da
opção `"readPreference"`.

Este método aplicará uma lógica específica para comandos de leitura (por exemplo,
[» distinct](https://www.mongodb.com/docs/manual/reference/command/distinct/)).
Os valores padrão para as opções `"readPreference"` e
`"readConcern"` serão inferidos de uma transação
ativa (indicada pela opção `"session"`), seguida
pelo [URI de conexão](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-uri).

> **Nota**:
>
> A opção `"readPreference"` não controla o servidor
> ao qual o driver emite a operação; ela sempre será executada
> neste objeto servidor. Em vez disso, ela pode ser usada ao emitir a operação para um
> servidor secundário (de uma conexão de conjunto de réplicas, não autônomas) ou nós mongo para
> garantir que o driver defina o protocolo de conexão de acordo ou adicione a
> preferência de leitura à operação, respectivamente.

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
    | readPreference | [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) | Uma preferência de leitura a ser usada para selecionar um servidor para a operação. |
    | session | [MongoDB\Driver\Session](class.mongodb-driver-session.md) | Uma sessão para associar à operação. |

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
- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança uma [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros (por exemplo, comando inválido).

### Veja também

- [MongoDB\Driver\Command](class.mongodb-driver-command.md)
- [MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md)
- [MongoDB\Driver\Server::executeCommand()](mongodb-driver-server.executecommand.md) - Executa um comando de banco de dados neste servidor
- [MongoDB\Driver\Server::executeReadWriteCommand()](mongodb-driver-server.executereadwritecommand.md) - Executa um comando de banco de dados que lê e grava neste servidor
- [MongoDB\Driver\Server::executeWriteCommand()](mongodb-driver-server.executewritecommand.md) - Executa um comando de banco de dados que grava neste servidor
- [MongoDB\Driver\Manager::executeReadCommand()](mongodb-driver-manager.executereadcommand.md) - Executa um comando de banco de dados que faz leitura

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
