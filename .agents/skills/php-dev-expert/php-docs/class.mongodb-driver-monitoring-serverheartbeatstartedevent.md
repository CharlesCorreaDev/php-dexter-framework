# A classe MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-serverheartbeatstartedevent.php

---

# A classe MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent**
encapsula informação sobre uma pulsação iniciada do servidor (ou seja,
o comando [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/)
emitido através do
[» monitoramento do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)).

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-serverheartbeatstartedevent.md#mongodb-driver-monitoring-serverheartbeatstartedevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-serverheartbeatstartedevent.md#mongodb-driver-monitoring-serverheartbeatstartedevent.props.port);

public
readonly
[bool](language.types.boolean.md)
[$awaited](class.mongodb-driver-monitoring-serverheartbeatstartedevent.md#mongodb-driver-monitoring-serverheartbeatstartedevent.props.awaited);

/\* Métodos \*/

final public function [getHost](mongodb-driver-monitoring-serverheartbeatstartedevent.gethost.md)(): [string](language.types.string.md)

final public function [getPort](mongodb-driver-monitoring-serverheartbeatstartedevent.getport.md)(): [int](language.types.integer.md)

final public function [isAwaited](mongodb-driver-monitoring-serverheartbeatstartedevent.isawaited.md)(): [bool](language.types.boolean.md)

}

## Propriedades

host
:   O nome de host do servidor.

port
:   A porta do servidor.

awaited
:   Se o heartbeat usou um protocolo de streaming. A extensão não
    usa o protocolo de streaming para monitoramento, portanto, este
    método sempre retornará **`false`**.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::getHost](mongodb-driver-monitoring-serverheartbeatstartedevent.gethost.md) — Retorna o nome do host do servidor
- [MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::getPort](mongodb-driver-monitoring-serverheartbeatstartedevent.getport.md) — Retorna a porta na qual este servidor está escutando
- [MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::isAwaited](mongodb-driver-monitoring-serverheartbeatstartedevent.isawaited.md) — Retorna se a pulsação usou um protocolo de fluxo

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
