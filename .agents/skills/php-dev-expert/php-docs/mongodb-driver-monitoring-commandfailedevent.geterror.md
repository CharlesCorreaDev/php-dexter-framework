# Retorna a exceção associada ao comando com falha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandfailedevent.geterror.php

---

# MongoDB\Driver\Monitoring\CommandFailedEvent::getError

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandFailedEvent::getError — Retorna a exceção associada ao comando com falha

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandFailedEvent::getError**(): [Exception](class.exception.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a [Exception](class.exception.md) associada ao comando com falha.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

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
