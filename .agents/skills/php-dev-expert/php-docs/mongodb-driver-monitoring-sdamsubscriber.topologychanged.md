# Método de notificação para uma alteração na descrição da topologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-sdamsubscriber.topologychanged.php

---

# MongoDB\Driver\Monitoring\SDAMSubscriber::topologyChanged

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\SDAMSubscriber::topologyChanged — Método de notificação para uma alteração na descrição da topologia

### Descrição

abstract public function **MongoDB\Driver\Monitoring\SDAMSubscriber::topologyChanged**([MongoDB\Driver\Monitoring\TopologyChangedEvent](class.mongodb-driver-monitoring-topologychangedevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver cadastrado, este método será chamado quando a descrição
da topologia for alterada. Por exemplo, uma topologia que descobrisse um novo conjunto
de réplicas primário causaria uma alteração na descrição da topologia.

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\TopologyChangedEvent](class.mongodb-driver-monitoring-topologychangedevent.md))
:   Um objeto de evento que encapsula informações sobre a descrição da topologia
    alterada.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\TopologyChangedEvent](class.mongodb-driver-monitoring-topologychangedevent.md)
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
