# A classe MongoDB\Driver\ServerDescription

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-serverdescription.php

---

# A classe MongoDB\Driver\ServerDescription

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\ServerDescription** é um objeto de valor
que representa um servidor ao qual o driver está conectado. Instâncias
desta classe são retornadas pelos métodos
[MongoDB\Driver\Server::getServerDescription()](mongodb-driver-server.getserverdescription.md) e
[MongoDB\Driver\Monitoring\ServerChangedEvent](class.mongodb-driver-monitoring-serverchangedevent.md).

## Resumo da classe

final

class **MongoDB\Driver\ServerDescription**
{

/\* Constantes \*/

const
[string](language.types.string.md)
[TYPE\_UNKNOWN](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-unknown) = "Unknown";

const
[string](language.types.string.md)
[TYPE\_STANDALONE](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-standalone) = "Standalone";

const
[string](language.types.string.md)
[TYPE\_MONGOS](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-mongos) = "Mongos";

const
[string](language.types.string.md)
[TYPE\_POSSIBLE\_PRIMARY](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-possible-primary) = "PossiblePrimary";

const
[string](language.types.string.md)
[TYPE\_RS\_PRIMARY](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-rs-primary) = "RSPrimary";

const
[string](language.types.string.md)
[TYPE\_RS\_SECONDARY](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-rs-secondary) = "RSSecondary";

const
[string](language.types.string.md)
[TYPE\_RS\_ARBITER](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-rs-arbiter) = "RSArbiter";

const
[string](language.types.string.md)
[TYPE\_RS\_OTHER](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-rs-other) = "RSOther";

const
[string](language.types.string.md)
[TYPE\_RS\_GHOST](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-rs-ghost) = "RSGhost";

const
[string](language.types.string.md)
[TYPE\_LOAD\_BALANCER](class.mongodb-driver-serverdescription.md#mongodb-driver-serverdescription.constants.type-load-balancer) = "LoadBalancer";

/\* Métodos \*/

final public function [getHelloResponse](mongodb-driver-serverdescription.gethelloresponse.md)(): [array](language.types.array.md)

final public function [getHost](mongodb-driver-serverdescription.gethost.md)(): [string](language.types.string.md)

final public function [getLastUpdateTime](mongodb-driver-serverdescription.getlastupdatetime.md)(): [int](language.types.integer.md)

final public function [getPort](mongodb-driver-serverdescription.getport.md)(): [int](language.types.integer.md)

final public function [getRoundTripTime](mongodb-driver-serverdescription.getroundtriptime.md)(): [?](language.types.null.md)[int](language.types.integer.md)

final public function [getType](mongodb-driver-serverdescription.gettype.md)(): [string](language.types.string.md)

}

## Constantes predefinidas

**`MongoDB\Driver\ServerDescription::TYPE_UNKNOWN`**
:   Tipo de servidor desconhecido, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

**`MongoDB\Driver\ServerDescription::TYPE_STANDALONE`**
:   Tipo de servidor autônomo, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

**`MongoDB\Driver\ServerDescription::TYPE_MONGOS`**
:   Tipo de servidor Mongos, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

**`MongoDB\Driver\ServerDescription::TYPE_POSSIBLE_PRIMARY`**
:   Tipo de servidor conjunto de réplicas, possivelmente primário, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

    Um servidor pode ser identificado como um possível primário se ainda não tiver sido verificado, mas outra memória do conjunto de réplicas pensa que é o primário.

**`MongoDB\Driver\ServerDescription::TYPE_RS_PRIMARY`**
:   Tipo de servidor conjunto de réplicas primário, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

**`MongoDB\Driver\ServerDescription::TYPE_RS_SECONDARY`**
:   Tipo de servidor conjunto de réplicas secundário, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

**`MongoDB\Driver\ServerDescription::TYPE_RS_ARBITER`**
:   Tipo de servidor conjunto de réplicas árbitro, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

**`MongoDB\Driver\ServerDescription::TYPE_RS_OTHER`**
:   Tipo de servidor conjunto de réplicas outros, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

    Esses servidores podem estar ocultos, inicializando ou recuperando. Eles não podem ser consultados, mas suas listas de hosts são úteis para descobrir a configuração atual do conjunto de réplicas.

**`MongoDB\Driver\ServerDescription::TYPE_RS_GHOST`**
:   Tipo de servidor conjunto de réplicas fantasma, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

    Os servidores podem ser identificados como tal em pelo menos três situações: brevemente durante a inicialização do servidor; em um conjunto de réplicas não inicializado; ou quando o servidor é evitado (ou seja, removido da configuração do conjunto de réplicas). Eles não podem ser consultados, nem sua lista de hosts pode ser usada para descobrir a configuração atual do conjunto de réplicas; entretanto, o cliente pode monitorar este servidor na esperança de que ele faça a transição para um estado mais útil.

**`MongoDB\Driver\ServerDescription::TYPE_LOAD_BALANCER`**
:   Tipo de servidor balanceador de carga, retornada por [MongoDB\Driver\ServerDescription::getType()](mongodb-driver-serverdescription.gettype.md).

## Índice

- [MongoDB\Driver\ServerDescription::getHelloResponse](mongodb-driver-serverdescription.gethelloresponse.md) — Retorna a resposta "hello" mais recente do servidor
- [MongoDB\Driver\ServerDescription::getHost](mongodb-driver-serverdescription.gethost.md) — Retorna o nome do host deste servidor
- [MongoDB\Driver\ServerDescription::getLastUpdateTime](mongodb-driver-serverdescription.getlastupdatetime.md) — Retorna o horário da última atualização do servidor em microssegundos
- [MongoDB\Driver\ServerDescription::getPort](mongodb-driver-serverdescription.getport.md) — Retorna a porta na qual este servidor está escutando
- [MongoDB\Driver\ServerDescription::getRoundTripTime](mongodb-driver-serverdescription.getroundtriptime.md) — Retorna o tempo de ida e volta do servidor em milissegundos
- [MongoDB\Driver\ServerDescription::getType](mongodb-driver-serverdescription.gettype.md) — Retorna uma string denotando o tipo deste servidor

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
