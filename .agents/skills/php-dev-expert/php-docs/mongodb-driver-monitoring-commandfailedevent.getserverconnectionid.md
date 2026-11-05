# Retorna o ID de conexão do servidor para o comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandfailedevent.getserverconnectionid.php

---

# MongoDB\Driver\Monitoring\CommandFailedEvent::getServerConnectionId

(mongodb >=1.14.0)

MongoDB\Driver\Monitoring\CommandFailedEvent::getServerConnectionId — Retorna o ID de conexão do servidor para o comando

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandFailedEvent::getServerConnectionId**(): [?](language.types.null.md)[int](language.types.integer.md)

Retorna o ID de conexão do servidor para o comando. O ID de conexão do servidor é
distinto do servidor (ou seja,
[MongoDB\Driver\Monitoring\CommandFailedEvent::getServer()](mongodb-driver-monitoring-commandfailedevent.getserver.md))
e é retornado no campo "connectionId" de uma resposta de comando `hello`
do MongoDB 4.2+.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID de conexão do servidor ou **`null`** se não estiver disponível.

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
