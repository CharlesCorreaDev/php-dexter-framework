# A classe MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-serverheartbeatfailedevent.php

---

# A classe MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent**
encapsula informação sobre uma pulsação falhada do servidor (ou seja,
o comando [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/)
emitido através do
[» monitoramento do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)).

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md#mongodb-driver-monitoring-serverheartbeatfailedevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md#mongodb-driver-monitoring-serverheartbeatfailedevent.props.port);

public
readonly
[bool](language.types.boolean.md)
[$awaited](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md#mongodb-driver-monitoring-serverheartbeatfailedevent.props.awaited);

public
readonly
[int](language.types.integer.md)
[$duration](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md#mongodb-driver-monitoring-serverheartbeatfailedevent.props.duration);

public
readonly
[Exception](class.exception.md)
[$error](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md#mongodb-driver-monitoring-serverheartbeatfailedevent.props.error);

/\* Métodos \*/

final public function [getDurationMicros](mongodb-driver-monitoring-serverheartbeatfailedevent.getdurationmicros.md)(): [int](language.types.integer.md)

final public function [getError](mongodb-driver-monitoring-serverheartbeatfailedevent.geterror.md)(): [Exception](class.exception.md)

final public function [getHost](mongodb-driver-monitoring-serverheartbeatfailedevent.gethost.md)(): [string](language.types.string.md)

final public function [getPort](mongodb-driver-monitoring-serverheartbeatfailedevent.getport.md)(): [int](language.types.integer.md)

final public function [isAwaited](mongodb-driver-monitoring-serverheartbeatfailedevent.isawaited.md)(): [bool](language.types.boolean.md)

}

## Propriedades

host
:   O nome de host do servidor.

port
:   A porta do servidor.

awaited
:   Se o heartbeat usou um protocolo de streaming. A extensão não usa
    o protocolo de streaming para monitoramento, portanto, este método
    sempre retornará **`false`**.

duration
:   A duração do pulso em microssegundos. A duração é um
    valor calculado que inclui o tempo para enviar a mensagem e
    receber a resposta do servidor.

error
:   A exceção que foi lançada quando o pulso falhou.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. A propriedade duration substitui o método **getDurationMicros()**. |

## Índice

- [MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getDurationMicros](mongodb-driver-monitoring-serverheartbeatfailedevent.getdurationmicros.md) — Retorna a duração da pulsação cardíaco em microssegundos
- [MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getError](mongodb-driver-monitoring-serverheartbeatfailedevent.geterror.md) — Retorna a exceção associada à pulsação com falha
- [MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getHost](mongodb-driver-monitoring-serverheartbeatfailedevent.gethost.md) — Retorna o nome do host do servidor
- [MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getPort](mongodb-driver-monitoring-serverheartbeatfailedevent.getport.md) — Retorna a porta na qual este servidor está escutando
- [MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::isAwaited](mongodb-driver-monitoring-serverheartbeatfailedevent.isawaited.md) — Retorna se a pulsação usou um protocolo de fluxo

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
