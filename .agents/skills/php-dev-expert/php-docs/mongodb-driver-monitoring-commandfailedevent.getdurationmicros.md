# Retorna a duração do comando em microssegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandfailedevent.getdurationmicros.php

---

# MongoDB\Driver\Monitoring\CommandFailedEvent::getDurationMicros

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandFailedEvent::getDurationMicros — Retorna a duração do comando em microssegundos

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandFailedEvent::getDurationMicros**(): [int](language.types.integer.md)

A duração do comando é um valor calculado que inclui o tempo para enviar a
mensagem e receber a resposta do servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a duração do comando em microssegundos.

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
