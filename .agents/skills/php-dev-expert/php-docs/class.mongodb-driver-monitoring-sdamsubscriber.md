# A interface MongoDB\Driver\Monitoring\SDAMSubscriber

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-sdamsubscriber.php

---

# A interface MongoDB\Driver\Monitoring\SDAMSubscriber

(mongodb >=1.13.0)

## Introdução

As classes podem implementar esta interface para registrar um assinante de evento que é
notificado sobre vários eventos SDAM. Consulte as
especificações de [» Descoberta e Monitoramento de Servidores](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)
e [» Monitoramento de SDAM](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring-logging-and-monitoring.md)
para obter informações adicionais.

## Resumo da Interface

class **MongoDB\Driver\Monitoring\SDAMSubscriber**
implements
[MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) {

/\* Métodos \*/

abstract public function [serverChanged](mongodb-driver-monitoring-sdamsubscriber.serverchanged.md)([MongoDB\Driver\Monitoring\ServerChangedEvent](class.mongodb-driver-monitoring-serverchangedevent.md) `$event`): [void](language.types.void.md)

abstract public function [serverClosed](mongodb-driver-monitoring-sdamsubscriber.serverclosed.md)([MongoDB\Driver\Monitoring\ServerClosedEvent](class.mongodb-driver-monitoring-serverclosedevent.md) `$event`): [void](language.types.void.md)

abstract public function [serverHeartbeatFailed](mongodb-driver-monitoring-sdamsubscriber.serverheartbeatfailed.md)([MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md) `$event`): [void](language.types.void.md)

abstract public function [serverHeartbeatStarted](mongodb-driver-monitoring-sdamsubscriber.serverheartbeatstarted.md)([MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent](class.mongodb-driver-monitoring-serverheartbeatstartedevent.md) `$event`): [void](language.types.void.md)

abstract public function [serverHeartbeatSucceeded](mongodb-driver-monitoring-sdamsubscriber.serverheartbeatsucceeded.md)([MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent](class.mongodb-driver-monitoring-serverheartbeatsucceededevent.md) `$event`): [void](language.types.void.md)

abstract public function [serverOpening](mongodb-driver-monitoring-sdamsubscriber.serveropening.md)([MongoDB\Driver\Monitoring\ServerOpeningEvent](class.mongodb-driver-monitoring-serveropeningevent.md) `$event`): [void](language.types.void.md)

abstract public function [topologyChanged](mongodb-driver-monitoring-sdamsubscriber.topologychanged.md)([MongoDB\Driver\Monitoring\TopologyChangedEvent](class.mongodb-driver-monitoring-topologychangedevent.md) `$event`): [void](language.types.void.md)

abstract public function [topologyClosed](mongodb-driver-monitoring-sdamsubscriber.topologyclosed.md)([MongoDB\Driver\Monitoring\TopologyClosedEvent](class.mongodb-driver-monitoring-topologyclosedevent.md) `$event`): [void](language.types.void.md)

abstract public function [topologyOpening](mongodb-driver-monitoring-sdamsubscriber.topologyopening.md)([MongoDB\Driver\Monitoring\TopologyOpeningEvent](class.mongodb-driver-monitoring-topologyopeningevent.md) `$event`): [void](language.types.void.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\Driver\Monitoring\SDAMSubscriber::serverChanged](mongodb-driver-monitoring-sdamsubscriber.serverchanged.md) — Método de notificação para uma alteração na descrição do servidor
- [MongoDB\Driver\Monitoring\SDAMSubscriber::serverClosed](mongodb-driver-monitoring-sdamsubscriber.serverclosed.md) — Método de notificação para fechamendo de um servidor
- [MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatFailed](mongodb-driver-monitoring-sdamsubscriber.serverheartbeatfailed.md) — Método de notificação para uma pulsação do servidor com falha
- [MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatStarted](mongodb-driver-monitoring-sdamsubscriber.serverheartbeatstarted.md) — Método de notificação para uma pulsação de servidor iniciada
- [MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatSucceeded](mongodb-driver-monitoring-sdamsubscriber.serverheartbeatsucceeded.md) — Método de notificação para uma pulsação do servidor bem-sucedida
- [MongoDB\Driver\Monitoring\SDAMSubscriber::serverOpening](mongodb-driver-monitoring-sdamsubscriber.serveropening.md) — Método de notificação para abertura de um servidor
- [MongoDB\Driver\Monitoring\SDAMSubscriber::topologyChanged](mongodb-driver-monitoring-sdamsubscriber.topologychanged.md) — Método de notificação para uma alteração na descrição da topologia
- [MongoDB\Driver\Monitoring\SDAMSubscriber::topologyClosed](mongodb-driver-monitoring-sdamsubscriber.topologyclosed.md) — Método de notificação para fechamento de topologia
- [MongoDB\Driver\Monitoring\SDAMSubscriber::topologyOpening](mongodb-driver-monitoring-sdamsubscriber.topologyopening.md) — Método de notificação para abrertura de topologia

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
