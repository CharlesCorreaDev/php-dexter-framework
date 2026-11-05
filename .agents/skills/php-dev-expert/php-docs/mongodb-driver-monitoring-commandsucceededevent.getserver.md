# Retorna o servidor no qual o comando foi executado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandsucceededevent.getserver.php

---

# MongoDB\Driver\Monitoring\CommandSucceededEvent::getServer

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandSucceededEvent::getServer — Retorna o servidor no qual o comando foi executado

**Aviso**

Este método foi *DESCONTINUADO* a partir da versão de
extensão 1.20.0 e foi removido na versão 2.0. As aplicações devem usar
[MongoDB\Driver\Monitoring\CommandSucceededEvent::getHost()](mongodb-driver-monitoring-commandsucceededevent.gethost.md)
e
[MongoDB\Driver\Monitoring\CommandSucceededEvent::getPort()](mongodb-driver-monitoring-commandsucceededevent.getport.md)
em seu lugar.

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandSucceededEvent::getServer**(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

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

- [MongoDB\Driver\Monitoring\CommandStartedEvent::getServer()](mongodb-driver-monitoring-commandstartedevent.getserver.md) - Retorna o servidor no qual o comando foi executado
- [MongoDB\Driver\Cursor::getServer()](mongodb-driver-cursor.getserver.md) - Retorna o servidor associado a este cursor
- [MongoDB\Driver\WriteResult::getServer()](mongodb-driver-writeresult.getserver.md) - Retorna o servidor associado a este resultado de gravação
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
