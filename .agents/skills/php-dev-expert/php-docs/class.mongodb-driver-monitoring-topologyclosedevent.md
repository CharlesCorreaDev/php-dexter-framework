# A classe MongoDB\Driver\Monitoring\TopologyClosedEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-topologyclosedevent.php

---

# A classe MongoDB\Driver\Monitoring\TopologyClosedEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\TopologyClosedEvent**
encapsula informações sobre uma topologia fechada.

> **Nota**:
>
> Devido ao comportamento de
> [manipulação de conexão e persistência](mongodb.connection-handling.md)
> do driver, este evento só pode ser observado quando um
> [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) é criado com a opção
> `"disableClientPersistence"` do driver e liberada
> antes do encerramento da solicitação (RSHUTDOWN).

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\TopologyClosedEvent**
{

/\* Propriedades \*/

public
readonly
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$topologyId](class.mongodb-driver-monitoring-topologyclosedevent.md#mongodb-driver-monitoring-topologyclosedevent.props.topologyid);

/\* Métodos \*/

final public function [getTopologyId](mongodb-driver-monitoring-topologyclosedevent.gettopologyid.md)(): [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

}

## Propriedades

topologyId
:   O ID da topologia.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\Monitoring\TopologyClosedEvent::getTopologyId](mongodb-driver-monitoring-topologyclosedevent.gettopologyid.md) — Retorna o ID da topologia

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
