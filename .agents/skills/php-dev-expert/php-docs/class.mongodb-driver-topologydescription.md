# A classe MongoDB\Driver\TopologyDescription

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-topologydescription.php

---

# A classe MongoDB\Driver\TopologyDescription

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\TopologyDescription** é um
objeto de valor que representa uma topologia à qual o driver está conectado.
As instâncias desta classe são retornadas pelos
métodos
[MongoDB\Driver\Monitoring\TopologyChangedEvent](class.mongodb-driver-monitoring-topologychangedevent.md).

## Resumo da classe

final

class **MongoDB\Driver\TopologyDescription**
{

/\* Constantes \*/

const
[string](language.types.string.md)
[TYPE\_UNKNOWN](class.mongodb-driver-topologydescription.md#mongodb-driver-topologydescription.constants.type-unknown) = "Unknown";

const
[string](language.types.string.md)
[TYPE\_SINGLE](class.mongodb-driver-topologydescription.md#mongodb-driver-topologydescription.constants.type-single) = "Single";

const
[string](language.types.string.md)
[TYPE\_SHARDED](class.mongodb-driver-topologydescription.md#mongodb-driver-topologydescription.constants.type-sharded) = "Sharded";

const
[string](language.types.string.md)
[TYPE\_REPLICA\_SET\_NO\_PRIMARY](class.mongodb-driver-topologydescription.md#mongodb-driver-topologydescription.constants.type-replica-set-no-primary) = "ReplicaSetNoPrimary";

const
[string](language.types.string.md)
[TYPE\_REPLICA\_SET\_WITH\_PRIMARY](class.mongodb-driver-topologydescription.md#mongodb-driver-topologydescription.constants.type-replica-set-with-primary) = "ReplicaSetWithPrimary";

const
[string](language.types.string.md)
[TYPE\_LOAD\_BALANCED](class.mongodb-driver-topologydescription.md#mongodb-driver-topologydescription.constants.type-load-balanced) = "LoadBalanced";

/\* Métodos \*/

final public function [getServers](mongodb-driver-topologydescription.getservers.md)(): [array](language.types.array.md)

final public function [getType](mongodb-driver-topologydescription.gettype.md)(): [string](language.types.string.md)

final public function [hasReadableServer](mongodb-driver-topologydescription.hasreadableserver.md)([?](language.types.null.md)[MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md) `$readPreference` = **`null`**): [bool](language.types.boolean.md)

final public function [hasWritableServer](mongodb-driver-topologydescription.haswritableserver.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`MongoDB\Driver\TopologyDescription::TYPE_UNKNOWN`**
:   Tipo de topologia desconhecido, retornada por [MongoDB\Driver\TopologyDescription::getType()](mongodb-driver-topologydescription.gettype.md).

**`MongoDB\Driver\TopologyDescription::TYPE_SINGLE`**
:   Servidor único (ou seja, conexão direta), retornada por [MongoDB\Driver\TopologyDescription::getType()](mongodb-driver-topologydescription.gettype.md).

**`MongoDB\Driver\TopologyDescription::TYPE_SHARDED`**
:   Cluster fragmentado, retornada por [MongoDB\Driver\TopologyDescription::getType()](mongodb-driver-topologydescription.gettype.md).

**`MongoDB\Driver\TopologyDescription::TYPE_REPLICA_SET_NO_PRIMARY`**
:   Conjunto de réplicas sem servidor primário, retornada por [MongoDB\Driver\TopologyDescription::getType()](mongodb-driver-topologydescription.gettype.md).

**`MongoDB\Driver\TopologyDescription::TYPE_REPLICA_SET_WITH_PRIMARY`**
:   Conjunto de réplicas com um servidor primário, retornada por [MongoDB\Driver\TopologyDescription::getType()](mongodb-driver-topologydescription.gettype.md).

**`MongoDB\Driver\TopologyDescription::TYPE_LOAD_BALANCED`**
:   Topologia com balanceamento de carga, retornada por [MongoDB\Driver\TopologyDescription::getType()](mongodb-driver-topologydescription.gettype.md).

## Índice

- [MongoDB\Driver\TopologyDescription::getServers](mongodb-driver-topologydescription.getservers.md) — Retorna os servidores na topologia
- [MongoDB\Driver\TopologyDescription::getType](mongodb-driver-topologydescription.gettype.md) — Retorna uma string denotando o tipo desta topologia
- [MongoDB\Driver\TopologyDescription::hasReadableServer](mongodb-driver-topologydescription.hasreadableserver.md) — Retorna se a topologia possui um servidor para leitura
- [MongoDB\Driver\TopologyDescription::hasWritableServer](mongodb-driver-topologydescription.haswritableserver.md) — Retorna se a topologia possui um servidor para gravação

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
