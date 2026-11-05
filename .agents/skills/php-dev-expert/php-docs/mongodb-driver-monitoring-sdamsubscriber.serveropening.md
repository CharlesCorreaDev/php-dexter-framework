# Método de notificação para abertura de um servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-sdamsubscriber.serveropening.php

---

# MongoDB\Driver\Monitoring\SDAMSubscriber::serverOpening

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\SDAMSubscriber::serverOpening — Método de notificação para abertura de um servidor

### Descrição

abstract public function **MongoDB\Driver\Monitoring\SDAMSubscriber::serverOpening**([MongoDB\Driver\Monitoring\ServerOpeningEvent](class.mongodb-driver-monitoring-serveropeningevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver registrado, este método será chamado quando um novo servidor
for adicionado à topologia.

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\ServerOpeningEvent](class.mongodb-driver-monitoring-serveropeningevent.md))
:   Um objeto de evento que encapsula informações sobre o servidor aberto.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\ServerOpeningEvent](class.mongodb-driver-monitoring-serveropeningevent.md)
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
