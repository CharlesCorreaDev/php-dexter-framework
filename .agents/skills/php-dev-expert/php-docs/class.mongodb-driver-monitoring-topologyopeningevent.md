# A classe MongoDB\Driver\Monitoring\TopologyOpeningEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-topologyopeningevent.php

---

# A classe MongoDB\Driver\Monitoring\TopologyOpeningEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\TopologyOpeningEvent**
encapsula informações sobre uma topologia aberta.

> **Nota**:
>
> Devido ao comportamento de
> [manipulação de conexão e persistência](mongodb.connection-handling.md)
> do driver, este evento pode não ser observado se um
> [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) usar um cliente
> [» libmongoc](https://github.com/mongodb/mongo-c-driver) persistido anteriormente.

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\TopologyOpeningEvent**
{

/\* Propriedades \*/

public
readonly
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$topologyId](class.mongodb-driver-monitoring-topologyopeningevent.md#mongodb-driver-monitoring-topologyopeningevent.props.topologyid);

/\* Métodos \*/

final public function [getTopologyId](mongodb-driver-monitoring-topologyopeningevent.gettopologyid.md)(): [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

}

## Propriedades

topologyId
:   O ID da topologia.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\Monitoring\TopologyOpeningEvent::getTopologyId](mongodb-driver-monitoring-topologyopeningevent.gettopologyid.md) — Retorna o ID da topologia

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
