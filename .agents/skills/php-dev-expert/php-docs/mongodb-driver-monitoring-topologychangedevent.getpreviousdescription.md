# Retorna a descrição anterior da topologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-topologychangedevent.getpreviousdescription.php

---

# MongoDB\Driver\Monitoring\TopologyChangedEvent::getPreviousDescription

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\TopologyChangedEvent::getPreviousDescription — Retorna a descrição anterior da topologia

### Descrição

final public function **MongoDB\Driver\Monitoring\TopologyChangedEvent::getPreviousDescription**(): [MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md)
anterior para a topologia.

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
