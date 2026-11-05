# A classe MongoDB\Driver\Monitoring\ServerOpeningEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-monitoring-serveropeningevent.php

---

# A classe MongoDB\Driver\Monitoring\ServerOpeningEvent

(mongodb >=1.13.0)

## Introdução

A classe **MongoDB\Driver\Monitoring\ServerOpeningEvent**
encapsula informações sobre um servidor aberto. Isso corresponde a um
novo servidor sendo adicionado à topologia.

## Resumo da classe

final

class **MongoDB\Driver\Monitoring\ServerOpeningEvent**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$host](class.mongodb-driver-monitoring-serveropeningevent.md#mongodb-driver-monitoring-serveropeningevent.props.host);

public
readonly
[int](language.types.integer.md)
[$port](class.mongodb-driver-monitoring-serveropeningevent.md#mongodb-driver-monitoring-serveropeningevent.props.port);

public
readonly
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)
[$topologyId](class.mongodb-driver-monitoring-serveropeningevent.md#mongodb-driver-monitoring-serveropeningevent.props.topologyid);

/\* Métodos \*/

final public function [getHost](mongodb-driver-monitoring-serveropeningevent.gethost.md)(): [string](language.types.string.md)

final public function [getPort](mongodb-driver-monitoring-serveropeningevent.getport.md)(): [int](language.types.integer.md)

final public function [getTopologyId](mongodb-driver-monitoring-serveropeningevent.gettopologyid.md)(): [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

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

- [MongoDB\Driver\Monitoring\ServerOpeningEvent::getHost](mongodb-driver-monitoring-serveropeningevent.gethost.md) — Retorna o nome do host do servidor
- [MongoDB\Driver\Monitoring\ServerOpeningEvent::getPort](mongodb-driver-monitoring-serveropeningevent.getport.md) — Retorna a porta na qual este servidor está escutando
- [MongoDB\Driver\Monitoring\ServerOpeningEvent::getTopologyId](mongodb-driver-monitoring-serveropeningevent.gettopologyid.md) — Retorna o ID da topologia associada a este servidor

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
