# Retorna o nome do host do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-serverheartbeatsucceededevent.gethost.php

---

# MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getHost

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getHost — Retorna o nome do host do servidor

### Descrição

final public function **MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getHost**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do host do servidor.

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
