# Retorna a porta do servidor para o comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandsucceededevent.getport.php

---

# MongoDB\Driver\Monitoring\CommandSucceededEvent::getPort

(mongodb >=1.20.0)

MongoDB\Driver\Monitoring\CommandSucceededEvent::getPort — Retorna a porta do servidor para o comando

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandSucceededEvent::getPort**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a porta do servidor em que o comando foi executado.

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
