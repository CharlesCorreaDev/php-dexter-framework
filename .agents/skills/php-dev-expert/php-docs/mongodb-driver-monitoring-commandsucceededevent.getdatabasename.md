# Retorna o banco de dados no qual o comando foi executado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandsucceededevent.getdatabasename.php

---

# MongoDB\Driver\Monitoring\CommandSucceededEvent::getDatabaseName

(mongodb >=1.19.0)

MongoDB\Driver\Monitoring\CommandSucceededEvent::getDatabaseName — Retorna o banco de dados no qual o comando foi executado

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandSucceededEvent::getDatabaseName**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o banco de dados no qual o comando foi executado.

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
