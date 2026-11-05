# Método de notificação para uma pulsação de servidor iniciada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-sdamsubscriber.serverheartbeatstarted.php

---

# MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatStarted

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatStarted — Método de notificação para uma pulsação de servidor iniciada

### Descrição

abstract public function **MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatStarted**([MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent](class.mongodb-driver-monitoring-serverheartbeatstartedevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver registrado, este método será chamado quando uma pulsação
de servidor (ou seja,
o comando [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/)
emitido através do
[» monitoramento do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)) é enviada
ao servidor.

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent](class.mongodb-driver-monitoring-serverheartbeatstartedevent.md))
:   Um objeto de evento que encapsula informações sobre a pulsação do
    servidor iniciada.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\ServerHeartbeatStartedEvent](class.mongodb-driver-monitoring-serverheartbeatstartedevent.md)
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
