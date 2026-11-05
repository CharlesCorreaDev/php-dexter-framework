# A classe MongoDB\Driver\Monitoring\ServerClosedEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-serverclosedevent.php

---

# A classe MongoDB\Driver\Monitoring\ServerClosedEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\ServerClosedEvent**
encapsula informações sobre um servidor fechado. Isto corresponde a um
servidor existente sendo removido da topologia.

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\ServerClosedEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-serverclosedevent.md#mongodb-driver-monitoring-serverclosedevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-serverclosedevent.md#mongodb-driver-monitoring-serverclosedevent.props.port);

public
readonly
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$topologyId](class.mongodb-driver-monitoring-serverclosedevent.md#mongodb-driver-monitoring-serverclosedevent.props.topologyid);

/\* Métodos \*/

final public function [getHost](mongodb-driver-monitoring-serverclosedevent.gethost.md)(): [string](language.types.string.md)

final public function [getPort](mongodb-driver-monitoring-serverclosedevent.getport.md)(): [int](language.types.integer.md)

final public function [getTopologyId](mongodb-driver-monitoring-serverclosedevent.gettopologyid.md)(): [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

}

## Propriedades

host
:   O nome de host do servidor.

port
:   A porta do servidor.

topologyId
:   O ID da topologia.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\Monitoring\ServerClosedEvent::getHost](mongodb-driver-monitoring-serverclosedevent.gethost.md) — Retorna o nome do host do servidor
- [MongoDB\Driver\Monitoring\ServerClosedEvent::getPort](mongodb-driver-monitoring-serverclosedevent.getport.md) — Retorna a porta na qual este servidor está escutando
- [MongoDB\Driver\Monitoring\ServerClosedEvent::getTopologyId](mongodb-driver-monitoring-serverclosedevent.gettopologyid.md) — Retorna o ID da topologia associada a este servidor

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
