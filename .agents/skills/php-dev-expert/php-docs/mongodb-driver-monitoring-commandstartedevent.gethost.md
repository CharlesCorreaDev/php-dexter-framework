# Retorna o nome do servidor para o comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandstartedevent.gethost.php

---

# MongoDB\Driver\Monitoring\CommandStartedEvent::getHost

(mongodb >=1.20.0)

MongoDB\Driver\Monitoring\CommandStartedEvent::getHost — Retorna o nome do servidor para o comando

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandStartedEvent::getHost**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do servidor no qual o comando foi executado.

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
