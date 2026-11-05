# Retorna a nova descrição da topologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-topologychangedevent.getnewdescription.php

---

# MongoDB\Driver\Monitoring\TopologyChangedEvent::getNewDescription

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\TopologyChangedEvent::getNewDescription — Retorna a nova descrição da topologia

### Descrição

final public function **MongoDB\Driver\Monitoring\TopologyChangedEvent::getNewDescription**(): [MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o novo [MongoDB\Driver\TopologyDescription](class.mongodb-driver-topologydescription.md)
para a topologia.

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
