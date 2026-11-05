# Retorna o servidor no qual o comando foi executado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandstartedevent.getserver.php

---

# MongoDB\Driver\Monitoring\CommandStartedEvent::getServer

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandStartedEvent::getServer — Retorna o servidor no qual o comando foi executado

**Aviso**

Este método foi *DESCONTINUADO* a partir da versão de
extensão 1.20.0 e foi removido na versão 2.0. As aplicações devem usar
[MongoDB\Driver\Monitoring\CommandStartedEvent::getHost()](mongodb-driver-monitoring-commandstartedevent.gethost.md)
e
[MongoDB\Driver\Monitoring\CommandStartedEvent::getPort()](mongodb-driver-monitoring-commandstartedevent.getport.md)
em seu lugar.

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandStartedEvent::getServer**(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) no qual o comando
foi executado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o [MongoDB\Driver\Server](class.mongodb-driver-server.md) no qual o comando
foi executado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Este método foi removido. |

### Veja também

- [MongoDB\Driver\Monitoring\CommandFailedEvent::getServer()](mongodb-driver-monitoring-commandfailedevent.getserver.md) - Retorna o servidor no qual o comando foi executado
- [MongoDB\Driver\Monitoring\CommandSucceededEvent::getServer()](mongodb-driver-monitoring-commandsucceededevent.getserver.md) - Retorna o servidor no qual o comando foi executado
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
