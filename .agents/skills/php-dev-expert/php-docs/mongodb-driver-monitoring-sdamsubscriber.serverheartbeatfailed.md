# Método de notificação para uma pulsação do servidor com falha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-sdamsubscriber.serverheartbeatfailed.php

---

# MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatFailed

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatFailed — Método de notificação para uma pulsação do servidor com falha

### Descrição

abstract public function **MongoDB\Driver\Monitoring\SDAMSubscriber::serverHeartbeatFailed**([MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver registrado, este método será chamado quando uma pulsação
de servidor (ou seja,
o comando [» hello](https://www.mongodb.com/docs/manual/reference/command/hello/)
emitido através do
[» monitoramento do servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md)) falha.

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md))
:   Um objeto de evento que encapsula informações sobre a pulsação do servidor
    com falha.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\ServerHeartbeatFailedEvent](class.mongodb-driver-monitoring-serverheartbeatfailedevent.md)
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
