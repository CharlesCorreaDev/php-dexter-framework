# Retorna a duração da pulsação cardíaco em microssegundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-serverheartbeatsucceededevent.getdurationmicros.php

---

# MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getDurationMicros

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getDurationMicros — Retorna a duração da pulsação cardíaco em microssegundos

### Descrição

final public function **MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getDurationMicros**(): [int](language.types.integer.md)

A duração da pulsação é um valor calculado que inclui o tempo para enviar a
mensagem e receber a resposta do servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a duração da pulsação cardíaco em microssegundos.

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
