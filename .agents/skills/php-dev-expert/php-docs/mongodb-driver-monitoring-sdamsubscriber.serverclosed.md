# Método de notificação para fechamendo de um servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-sdamsubscriber.serverclosed.php

---

# MongoDB\Driver\Monitoring\SDAMSubscriber::serverClosed

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\SDAMSubscriber::serverClosed — Método de notificação para fechamendo de um servidor

### Descrição

abstract public function **MongoDB\Driver\Monitoring\SDAMSubscriber::serverClosed**([MongoDB\Driver\Monitoring\ServerClosedEvent](class.mongodb-driver-monitoring-serverclosedevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver registrado, esse método será chamado quando um
servidor existente for removido da topologia.

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\ServerClosedEvent](class.mongodb-driver-monitoring-serverclosedevent.md))
:   Um objeto de evento que encapsula informações sobre o servidor fechado.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\ServerClosedEvent](class.mongodb-driver-monitoring-serverclosedevent.md)
- [MongoDB\Driver\Monitoring\addSubscriber()](function.mongodb.driver.monitoring.addsubscriber.md) - Registra um assinante de evento de monitoramento globalmente
- [MongoDB\Driver\Manager::addSubscriber()](mongodb-driver-manager.addsubscriber.md) - Inscreve um assinante de evento de monitoramento com este gerenciador

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
