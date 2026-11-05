# Retorna o nome do comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandsucceededevent.getcommandname.php

---

# MongoDB\Driver\Monitoring\CommandSucceededEvent::getCommandName

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandSucceededEvent::getCommandName — Retorna o nome do comando

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandSucceededEvent::getCommandName**(): [string](language.types.string.md)

Retorna o nome do comando (ex.: `"find"`,
`"aggregate"`).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do comando.

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
