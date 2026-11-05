# A classe MongoDB\Driver\Monitoring\CommandStartedEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-commandstartedevent.php

---

# A classe MongoDB\Driver\Monitoring\CommandStartedEvent

(mongodb >=1.3.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\CommandStartedEvent**
encapsula informação sobre um comando iniciado.

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\CommandStartedEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.port);

public
readonly
[string](language.types.string.md)
[$commandName](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.commandname);

public
readonly
[string](language.types.string.md)
[$databaseName](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.databasename);

public
readonly
[object](language.types.object.md)
[$command](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.command);

public
readonly
[string](language.types.string.md)
[$operationId](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.operationid);

public
readonly
[string](language.types.string.md)
[$requestId](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.requestid);

public
readonly
?[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$serviceId](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.serviceid);

public
readonly
?[int](language.types.integer.md)
[$serverConnectionId](class.mongodb-driver-monitoring-commandstartedevent.md#mongodb-driver-monitoring-commandstartedevent.props.serverconnectionid);

/\* Métodos \*/

final public function [getCommand](mongodb-driver-monitoring-commandstartedevent.getcommand.md)(): [object](language.types.object.md)

final public function [getCommandName](mongodb-driver-monitoring-commandstartedevent.getcommandname.md)(): [string](language.types.string.md)

final public function [getDatabaseName](mongodb-driver-monitoring-commandstartedevent.getdatabasename.md)(): [string](language.types.string.md)

final public function [getHost](mongodb-driver-monitoring-commandstartedevent.gethost.md)(): [string](language.types.string.md)

final public function [getOperationId](mongodb-driver-monitoring-commandstartedevent.getoperationid.md)(): [string](language.types.string.md)

final public function [getPort](mongodb-driver-monitoring-commandstartedevent.getport.md)(): [int](language.types.integer.md)

final public function [getRequestId](mongodb-driver-monitoring-commandstartedevent.getrequestid.md)(): [string](language.types.string.md)

final public function [getServer](mongodb-driver-monitoring-commandstartedevent.getserver.md)(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

final public function [getServerConnectionId](mongodb-driver-monitoring-commandstartedevent.getserverconnectionid.md)(): [?](language.types.null.md)[int](language.types.integer.md)

final public function [getServiceId](mongodb-driver-monitoring-commandstartedevent.getserviceid.md)(): [?](language.types.null.md)[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

}

## Propriedades

host
:   O nome do host do servidor que executou o comando.

port
:   A porta do servidor que executou o comando.

commandName
:   O nome do comando.

databaseName
:   O nome do banco de dados.

command
:   O documento de comando.

operationId
:   O ID da operação. Ele pode ser usado para vincular eventos, como
    gravações em lote, que podem disparar vários comandos.

requestId
:   O ID da solicitação. Ele pode ser usado para associar este
    **MongoDB\Driver\Monitoring\CommandStartedEvent**
    a um evento correspondente
    [MongoDB\Driver\Monitoring\CommandSucceededEvent](class.mongodb-driver-monitoring-commandsucceededevent.md)
    ou
    [MongoDB\Driver\Monitoring\CommandFailedEvent](class.mongodb-driver-monitoring-commandfailedevent.md).

serviceId
:   O ID do serviço, ou **`null`** se o servidor não o suportar (ou seja,
    não estiver usando o modo de balanceamento de carga).

serverConnectionId
:   O ID de conexão do servidor, ou **`null`** se não estiver disponível.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\Monitoring\CommandStartedEvent::getCommand](mongodb-driver-monitoring-commandstartedevent.getcommand.md) — Retorna o documento de comando
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getCommandName](mongodb-driver-monitoring-commandstartedevent.getcommandname.md) — Retorna o nome do comando
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getDatabaseName](mongodb-driver-monitoring-commandstartedevent.getdatabasename.md) — Retorna o banco de dados no qual o comando foi executado
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getHost](mongodb-driver-monitoring-commandstartedevent.gethost.md) — Retorna o nome do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getOperationId](mongodb-driver-monitoring-commandstartedevent.getoperationid.md) — Retorna o ID da operação do comando
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getPort](mongodb-driver-monitoring-commandstartedevent.getport.md) — Retorna a porta do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getRequestId](mongodb-driver-monitoring-commandstartedevent.getrequestid.md) — Retorna o ID da solicitação do comando
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getServer](mongodb-driver-monitoring-commandstartedevent.getserver.md) — Retorna o servidor no qual o comando foi executado
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getServerConnectionId](mongodb-driver-monitoring-commandstartedevent.getserverconnectionid.md) — Retorna o ID de conexão do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandStartedEvent::getServiceId](mongodb-driver-monitoring-commandstartedevent.getserviceid.md) — Retorna o ID de serviço do balanceador de carga para o comando

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
