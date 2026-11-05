# Retorna a porta na qual este servidor está escutando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-serverchangedevent.getport.php

---

# MongoDB\Driver\Monitoring\ServerChangedEvent::getPort

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\ServerChangedEvent::getPort — Retorna a porta na qual este servidor está escutando

### Descrição

final public function **MongoDB\Driver\Monitoring\ServerChangedEvent::getPort**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a porta na qual este servidor está escutando.

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
