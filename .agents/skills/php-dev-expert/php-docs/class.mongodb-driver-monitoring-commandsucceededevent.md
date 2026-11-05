# A classe MongoDB\Driver\Monitoring\CommandSucceededEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-commandsucceededevent.php

---

# A classe MongoDB\Driver\Monitoring\CommandSucceededEvent

(mongodb >=1.3.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\CommandSucceededEvent**
encapsula informação sobre um comando bem-sucedido.

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\CommandSucceededEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.port);

public
readonly
[string](language.types.string.md)
[$commandName](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.commandname);

public
readonly
[string](language.types.string.md)
[$databaseName](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.databasename);

public
readonly
[int](language.types.integer.md)
[$duration](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.duration);

public
readonly
[object](language.types.object.md)
[$reply](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.reply);

public
readonly
[string](language.types.string.md)
[$operationId](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.operationid);

public
readonly
[string](language.types.string.md)
[$requestId](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.requestid);

public
readonly
?[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$serviceId](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.serviceid);

public
readonly
?[int](language.types.integer.md)
[$serverConnectionId](class.mongodb-driver-monitoring-commandsucceededevent.md#mongodb-driver-monitoring-commandsucceededevent.props.serverconnectionid);

/\* Métodos \*/

final public function [getCommandName](mongodb-driver-monitoring-commandsucceededevent.getcommandname.md)(): [string](language.types.string.md)

final public function [getDatabaseName](mongodb-driver-monitoring-commandsucceededevent.getdatabasename.md)(): [string](language.types.string.md)

final public function [getDurationMicros](mongodb-driver-monitoring-commandsucceededevent.getdurationmicros.md)(): [int](language.types.integer.md)

final public function [getHost](mongodb-driver-monitoring-commandsucceededevent.gethost.md)(): [string](language.types.string.md)

final public function [getOperationId](mongodb-driver-monitoring-commandsucceededevent.getoperationid.md)(): [string](language.types.string.md)

final public function [getPort](mongodb-driver-monitoring-commandsucceededevent.getport.md)(): [int](language.types.integer.md)

final public function [getReply](mongodb-driver-monitoring-commandsucceededevent.getreply.md)(): [object](language.types.object.md)

final public function [getRequestId](mongodb-driver-monitoring-commandsucceededevent.getrequestid.md)(): [string](language.types.string.md)

final public function [getServer](mongodb-driver-monitoring-commandsucceededevent.getserver.md)(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

final public function [getServerConnectionId](mongodb-driver-monitoring-commandsucceededevent.getserverconnectionid.md)(): [?](language.types.null.md)[int](language.types.integer.md)

final public function [getServiceId](mongodb-driver-monitoring-commandsucceededevent.getserviceid.md)(): [?](language.types.null.md)[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

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

duration
:   A duração do comando em microssegundos. A duração é um
    valor calculado que inclui o tempo para enviar a mensagem e
    receber a resposta do servidor.

reply
:   O documento de resposta retornado pelo servidor.

operationId
:   O ID da operação. Ele pode ser usado para vincular eventos, como
    gravações em lote, que podem disparar vários comandos.

requestId
:   O ID da solicitação. Isso pode ser usado para associar este
    **MongoDB\Driver\Monitoring\CommandSucceededEvent**
    a um
    [MongoDB\Driver\Monitoring\CommandStartedEvent](class.mongodb-driver-monitoring-commandstartedevent.md) correspondente.

serviceId
:   O ID do serviço, ou **`null`** se o servidor não o suportar (ou seja,
    não estiver usando o modo de balanceamento de carga).

serverConnectionId
:   O ID de conexão do servidor, ou **`null`** se não estiver disponível.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. A propriedade duration substitui o método **getDurationMicros()**. |

## Índice

- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getCommandName](mongodb-driver-monitoring-commandsucceededevent.getcommandname.md) — Retorna o nome do comando
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getDatabaseName](mongodb-driver-monitoring-commandsucceededevent.getdatabasename.md) — Retorna o banco de dados no qual o comando foi executado
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getDurationMicros](mongodb-driver-monitoring-commandsucceededevent.getdurationmicros.md) — Retorna a duração do comando em microssegundos
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getHost](mongodb-driver-monitoring-commandsucceededevent.gethost.md) — Retorna o nome do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getOperationId](mongodb-driver-monitoring-commandsucceededevent.getoperationid.md) — Retorna o ID da operação do comando
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getPort](mongodb-driver-monitoring-commandsucceededevent.getport.md) — Retorna a porta do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getReply](mongodb-driver-monitoring-commandsucceededevent.getreply.md) — Retorna o documento de resposta do comando
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId](mongodb-driver-monitoring-commandsucceededevent.getrequestid.md) — Retorna o ID da solicitação do comando
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getServer](mongodb-driver-monitoring-commandsucceededevent.getserver.md) — Retorna o servidor no qual o comando foi executado
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getServerConnectionId](mongodb-driver-monitoring-commandsucceededevent.getserverconnectionid.md) — Retorna o ID de conexão do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getServiceId](mongodb-driver-monitoring-commandsucceededevent.getserviceid.md) — Retorna o ID de serviço do balanceador de carga para o comando

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
