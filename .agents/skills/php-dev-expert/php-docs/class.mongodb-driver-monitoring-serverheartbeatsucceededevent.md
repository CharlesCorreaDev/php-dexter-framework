# A classe MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-serverheartbeatsucceededevent.php

---

# A classe MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent**
encapsula informação sobre uma pulsação bem sucedida do servidor (ou seja,
o comando [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/)
emitido através do
[» monitoramento do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)).

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-serverheartbeatsucceededevent.md#mongodb-driver-monitoring-serverheartbeatsucceededevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-serverheartbeatsucceededevent.md#mongodb-driver-monitoring-serverheartbeatsucceededevent.props.port);

public
readonly
[bool](language.types.boolean.md)
[$awaited](class.mongodb-driver-monitoring-serverheartbeatsucceededevent.md#mongodb-driver-monitoring-serverheartbeatsucceededevent.props.awaited);

public
readonly
[int](language.types.integer.md)
[$duration](class.mongodb-driver-monitoring-serverheartbeatsucceededevent.md#mongodb-driver-monitoring-serverheartbeatsucceededevent.props.duration);

public
readonly
[object](language.types.object.md)
[$reply](class.mongodb-driver-monitoring-serverheartbeatsucceededevent.md#mongodb-driver-monitoring-serverheartbeatsucceededevent.props.reply);

/\* Métodos \*/

final public function [getDurationMicros](mongodb-driver-monitoring-serverheartbeatsucceededevent.getdurationmicros.md)(): [int](language.types.integer.md)

final public function [getHost](mongodb-driver-monitoring-serverheartbeatsucceededevent.gethost.md)(): [string](language.types.string.md)

final public function [getPort](mongodb-driver-monitoring-serverheartbeatsucceededevent.getport.md)(): [int](language.types.integer.md)

final public function [getReply](mongodb-driver-monitoring-serverheartbeatsucceededevent.getreply.md)(): [object](language.types.object.md)

final public function [isAwaited](mongodb-driver-monitoring-serverheartbeatsucceededevent.isawaited.md)(): [bool](language.types.boolean.md)

}

## Propriedades

host
:   O nome do host do servidor.

port
:   A porta do servidor.

awaited
:   Se o heartbeat usou um protocolo de streaming. A extensão não usa o protocolo
    de streaming para monitoramento, portanto, este método
    sempre retornará **`false`**.

duration
:   A duração do heartbeat em microssegundos. A duração é um
    valor calculado que inclui o tempo para enviar a mensagem e
    receber a resposta do servidor.

reply
:   O documento de resposta retornado pelo servidor.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. A propriedade duration substitui o método **getDurationMicros()**. |

## Índice

- [MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getDurationMicros](mongodb-driver-monitoring-serverheartbeatsucceededevent.getdurationmicros.md) — Retorna a duração da pulsação cardíaco em microssegundos
- [MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getHost](mongodb-driver-monitoring-serverheartbeatsucceededevent.gethost.md) — Retorna o nome do host do servidor
- [MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getPort](mongodb-driver-monitoring-serverheartbeatsucceededevent.getport.md) — Retorna a porta na qual este servidor está escutando
- [MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getReply](mongodb-driver-monitoring-serverheartbeatsucceededevent.getreply.md) — Retorna o documento de resposta da pulsação
- [MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::isAwaited](mongodb-driver-monitoring-serverheartbeatsucceededevent.isawaited.md) — Retorna se a pulsação usou um protocolo de fluxo

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
