# Retorna a exceção associada à pulsação com falha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-serverheartbeatfailedevent.geterror.php

---

# MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getError

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getError — Retorna a exceção associada à pulsação com falha

### Descrição

final public function **MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent::getError**(): [Exception](class.exception.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a [Exception](class.exception.md) associada à pulsação
com falha.

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
