# A classe MongoDB\Driver\Monitoring\ServerChangedEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-serverchangedevent.php

---

# A classe MongoDB\Driver\Monitoring\ServerChangedEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\ServerChangedEvent**
encapsula informações sobre uma descrição de servidor alterada. Por
exemplo, a mudança do tipo de servidor de secundário para primário faria com que a
descrição do servidor mudasse.

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\ServerChangedEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-serverchangedevent.md#mongodb-driver-monitoring-serverchangedevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-serverchangedevent.md#mongodb-driver-monitoring-serverchangedevent.props.port);

public
readonly
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$topologyId](class.mongodb-driver-monitoring-serverchangedevent.md#mongodb-driver-monitoring-serverchangedevent.props.topologyid);

public
readonly
[MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)
[$newDescription](class.mongodb-driver-monitoring-serverchangedevent.md#mongodb-driver-monitoring-serverchangedevent.props.newdescription);

public
readonly
[MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)
[$previousDescription](class.mongodb-driver-monitoring-serverchangedevent.md#mongodb-driver-monitoring-serverchangedevent.props.previousdescription);

/\* Métodos \*/

final public function [getHost](mongodb-driver-monitoring-serverchangedevent.gethost.md)(): [string](language.types.string.md)

final public function [getNewDescription](mongodb-driver-monitoring-serverchangedevent.getnewdescription.md)(): [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)

final public function [getPort](mongodb-driver-monitoring-serverchangedevent.getport.md)(): [int](language.types.integer.md)

final public function [getPreviousDescription](mongodb-driver-monitoring-serverchangedevent.getpreviousdescription.md)(): [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)

final public function [getTopologyId](mongodb-driver-monitoring-serverchangedevent.gettopologyid.md)(): [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

}

## Propriedades

host
:   O nome do host do servidor.

port
:   A porta do servidor.

topologyId
:   O ID da topologia.

newDescription
:   A nova descrição do servidor.

previousDescription
:   A descrição anterior do servidor.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\Monitoring\ServerChangedEvent::getHost](mongodb-driver-monitoring-serverchangedevent.gethost.md) — Retorna o nome do host do servidor
- [MongoDB\Driver\Monitoring\ServerChangedEvent::getNewDescription](mongodb-driver-monitoring-serverchangedevent.getnewdescription.md) — Retorna a nova descrição do servidor
- [MongoDB\Driver\Monitoring\ServerChangedEvent::getPort](mongodb-driver-monitoring-serverchangedevent.getport.md) — Retorna a porta na qual este servidor está escutando
- [MongoDB\Driver\Monitoring\ServerChangedEvent::getPreviousDescription](mongodb-driver-monitoring-serverchangedevent.getpreviousdescription.md) — Retorna a descrição anterior do servidor
- [MongoDB\Driver\Monitoring\ServerChangedEvent::getTopologyId](mongodb-driver-monitoring-serverchangedevent.gettopologyid.md) — Retorna o ID da topologia associada a este servidor

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
