# Método de notificação para um comando bem-sucedido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandsubscriber.commandsucceeded.php

---

# MongoDB\Driver\Monitoring\CommandSubscriber::commandSucceeded

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandSubscriber::commandSucceeded — Método de notificação para um comando bem-sucedido

### Descrição

abstract public function **MongoDB\Driver\Monitoring\CommandSubscriber::commandSucceeded**([MongoDB\Driver\Monitoring\CommandSucceededEvent](class.mongodb-driver-monitoring-commandsucceededevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver registrado, esse método será chamado quando um comando
for bem-sucedido.

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\CommandSucceededEvent](class.mongodb-driver-monitoring-commandsucceededevent.md))
:   Um objeto de evento que encapsula informações sobre o comando bem-sucedido.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\CommandSucceededEvent](class.mongodb-driver-monitoring-commandsucceededevent.md)
- [MongoDB\Driver\Monitoring\addSubscriber()](function.mongodb.driver.monitoring.addsubscriber.md) - Registra um assinante de evento de monitoramento globalmente
- [MongoDB\Driver\Manager::addSubscriber()](mongodb-driver-manager.addsubscriber.md) - Inscreve um assinante de evento de monitoramento com este gerenciador
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
