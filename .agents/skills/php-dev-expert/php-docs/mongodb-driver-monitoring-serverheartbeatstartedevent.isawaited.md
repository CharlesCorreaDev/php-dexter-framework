# Retorna se a pulsação usou um protocolo de fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-serverheartbeatstartedevent.isawaited.php

---

# MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::isAwaited

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::isAwaited — Retorna se a pulsação usou um protocolo de fluxo

### Descrição

final public function **MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent::isAwaited**(): [bool](language.types.boolean.md)

Retorna se a pulsação usou um protocolo de fluxo. A extensão não usa
o protocolo de fluxo para monitoramento, portanto esse método sempre
retornará **`false`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`false`**.

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
