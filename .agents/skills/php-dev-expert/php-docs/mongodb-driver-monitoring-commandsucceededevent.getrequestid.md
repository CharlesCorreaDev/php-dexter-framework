# Retorna o ID da solicitação do comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandsucceededevent.getrequestid.php

---

# MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId — Retorna o ID da solicitação do comando

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId**(): [string](language.types.string.md)

O ID da solicitação é gerado pela extensão e pode ser usado para associar
este [MongoDB\Driver\Monitoring\CommandSucceededEvent](class.mongodb-driver-monitoring-commandsucceededevent.md)
a um
[MongoDB\Driver\Monitoring\CommandStartedEvent](class.mongodb-driver-monitoring-commandstartedevent.md) anterior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID da solicitação do comando.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\CommandStartedEvent::getRequestId()](mongodb-driver-monitoring-commandstartedevent.getrequestid.md) - Retorna o ID da solicitação do comando
- [Monitoramento de Desempenho de Aplicação (APM)](mongodb.tutorial.apm.md)

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
