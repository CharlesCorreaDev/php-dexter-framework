# A classe MongoDB\Driver\Monitoring\CommandFailedEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-commandfailedevent.php

---

# A classe MongoDB\Driver\Monitoring\CommandFailedEvent

(mongodb >=1.3.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\CommandFailedEvent**
encapsula informação sobre um comando falhado.

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\CommandFailedEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.port);

public
readonly
[string](language.types.string.md)
[$commandName](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.commandname);

public
readonly
[string](language.types.string.md)
[$databaseName](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.databasename);

public
readonly
[int](language.types.integer.md)
[$duration](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.duration);

public
readonly
[Exception](class.exception.md)
[$error](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.error);

public
readonly
[object](language.types.object.md)
[$reply](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.reply);

public
readonly
[string](language.types.string.md)
[$operationId](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.operationid);

public
readonly
[string](language.types.string.md)
[$requestId](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.requestid);

public
readonly
?[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$serviceId](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.serviceid);

public
readonly
?[int](language.types.integer.md)
[$serverConnectionId](class.mongodb-driver-monitoring-commandfailedevent.md#mongodb-driver-monitoring-commandfailedevent.props.serverconnectionid);

/\* Métodos \*/

final public function [getCommandName](mongodb-driver-monitoring-commandfailedevent.getcommandname.md)(): [string](language.types.string.md)

final public function [getDatabaseName](mongodb-driver-monitoring-commandfailedevent.getdatabasename.md)(): [string](language.types.string.md)

final public function [getDurationMicros](mongodb-driver-monitoring-commandfailedevent.getdurationmicros.md)(): [int](language.types.integer.md)

final public function [getError](mongodb-driver-monitoring-commandfailedevent.geterror.md)(): [Exception](class.exception.md)

final public function [getHost](mongodb-driver-monitoring-commandfailedevent.gethost.md)(): [string](language.types.string.md)

final public function [getOperationId](mongodb-driver-monitoring-commandfailedevent.getoperationid.md)(): [string](language.types.string.md)

final public function [getPort](mongodb-driver-monitoring-commandfailedevent.getport.md)(): [int](language.types.integer.md)

final public function [getReply](mongodb-driver-monitoring-commandfailedevent.getreply.md)(): [object](language.types.object.md)

final public function [getRequestId](mongodb-driver-monitoring-commandfailedevent.getrequestid.md)(): [string](language.types.string.md)

final public function [getServer](mongodb-driver-monitoring-commandfailedevent.getserver.md)(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

final public function [getServerConnectionId](mongodb-driver-monitoring-commandfailedevent.getserverconnectionid.md)(): [?](language.types.null.md)[int](language.types.integer.md)

final public function [getServiceId](mongodb-driver-monitoring-commandfailedevent.getserviceid.md)(): [?](language.types.null.md)[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

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

error
:   A exceção que foi lançada quando o comando falhou.

reply
:   O documento de resposta de falha retornado pelo servidor.

operationId
:   O ID da operação. Ele pode ser usado para vincular eventos, como
    gravações em lote, que podem disparar vários comandos.

requestId
:   O ID da solicitação. Isso pode ser usado para associar este
    **MongoDB\Driver\Monitoring\CommandFailedEvent**
    a um evento correspondente
    [MongoDB\Driver\Monitoring\CommandStartedEvent](class.mongodb-driver-monitoring-commandstartedevent.md).

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

- [MongoDB\Driver\Monitoring\CommandFailedEvent::getCommandName](mongodb-driver-monitoring-commandfailedevent.getcommandname.md) — Retorna o nome do comando
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getDatabaseName](mongodb-driver-monitoring-commandfailedevent.getdatabasename.md) — Retorna o banco de dados no qual o comando foi executado
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getDurationMicros](mongodb-driver-monitoring-commandfailedevent.getdurationmicros.md) — Retorna a duração do comando em microssegundos
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getError](mongodb-driver-monitoring-commandfailedevent.geterror.md) — Retorna a exceção associada ao comando com falha
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getHost](mongodb-driver-monitoring-commandfailedevent.gethost.md) — Retorna o nome do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getOperationId](mongodb-driver-monitoring-commandfailedevent.getoperationid.md) — Retorna o ID da operação do comando
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getPort](mongodb-driver-monitoring-commandfailedevent.getport.md) — Retorna a porta do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getReply](mongodb-driver-monitoring-commandfailedevent.getreply.md) — Retorna o documento de resposta do comando
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getRequestId](mongodb-driver-monitoring-commandfailedevent.getrequestid.md) — Retorna o ID da solicitação do comando
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getServer](mongodb-driver-monitoring-commandfailedevent.getserver.md) — Retorna o servidor no qual o comando foi executado
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getServerConnectionId](mongodb-driver-monitoring-commandfailedevent.getserverconnectionid.md) — Retorna o ID de conexão do servidor para o comando
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getServiceId](mongodb-driver-monitoring-commandfailedevent.getserviceid.md) — Retorna o ID de serviço do balanceador de carga para o comando

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
