# A classe MongoDB\Driver\Monitoring\TopologyChangedEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-topologychangedevent.php

---

# A classe MongoDB\Driver\Monitoring\TopologyChangedEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\TopologyChangedEvent**
encapsula informações sobre uma descrição de topologia alterada. Por
exemplo, uma topologia que descobrisse um novo conjunto de réplicas primário causaria
uma alteração na descrição da topologia.

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\TopologyChangedEvent**
{

/\* Propriedades \*/

public
readonly
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$topologyId](class.mongodb-driver-monitoring-topologychangedevent.md#mongodb-driver-monitoring-topologychangedevent.props.topologyid);

public
readonly
[MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md)
[$newDescription](class.mongodb-driver-monitoring-topologychangedevent.md#mongodb-driver-monitoring-topologychangedevent.props.newdescription);

public
readonly
[MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md)
[$previousDescription](class.mongodb-driver-monitoring-topologychangedevent.md#mongodb-driver-monitoring-topologychangedevent.props.previousdescription);

/\* Métodos \*/

final public function [getNewDescription](mongodb-driver-monitoring-topologychangedevent.getnewdescription.md)(): [MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md)

final public function [getPreviousDescription](mongodb-driver-monitoring-topologychangedevent.getpreviousdescription.md)(): [MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md)

final public function [getTopologyId](mongodb-driver-monitoring-topologychangedevent.gettopologyid.md)(): [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

}

## Propriedades

topologyId
:   O ID da topologia.

newDescription
:   A nova descrição da topologia.

previousDescription
:   A antiga descrição da topologia.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\Monitoring\TopologyChangedEvent::getNewDescription](mongodb-driver-monitoring-topologychangedevent.getnewdescription.md) — Retorna a nova descrição da topologia
- [MongoDB\Driver\Monitoring\TopologyChangedEvent::getPreviousDescription](mongodb-driver-monitoring-topologychangedevent.getpreviousdescription.md) — Retorna a descrição anterior da topologia
- [MongoDB\Driver\Monitoring\TopologyChangedEvent::getTopologyId](mongodb-driver-monitoring-topologychangedevent.gettopologyid.md) — Retorna o ID da topologia

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
