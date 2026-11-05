# Retorna a nova descrição do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-serverchangedevent.getnewdescription.php

---

# MongoDB\Driver\Monitoring\ServerChangedEvent::getNewDescription

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\ServerChangedEvent::getNewDescription — Retorna a nova descrição do servidor

### Descrição

final public function **MongoDB\Driver\Monitoring\ServerChangedEvent::getNewDescription**(): [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o novo [MongoDB\Driver\ServerDescription](class.mongodb-driver-serverdescription.md)
para o servidor.

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
