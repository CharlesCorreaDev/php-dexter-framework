# Retorna o ID da topologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-topologyclosedevent.gettopologyid.php

---

# MongoDB\Driver\Monitoring\TopologyClosedEvent::getTopologyId

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\TopologyClosedEvent::getTopologyId — Retorna o ID da topologia

### Descrição

final public function **MongoDB\Driver\Monitoring\TopologyClosedEvent::getTopologyId**(): [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID da topologia.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

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
