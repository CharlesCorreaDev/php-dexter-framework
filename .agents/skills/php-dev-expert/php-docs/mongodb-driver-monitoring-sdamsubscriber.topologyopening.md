# Método de notificação para abrertura de topologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-sdamsubscriber.topologyopening.php

---

# MongoDB\Driver\Monitoring\SDAMSubscriber::topologyOpening

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\SDAMSubscriber::topologyOpening — Método de notificação para abrertura de topologia

### Descrição

abstract public function **MongoDB\Driver\Monitoring\SDAMSubscriber::topologyOpening**([MongoDB\Driver\Monitoring\TopologyOpeningEvent](class.mongodb-driver-monitoring-topologyopeningevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver cadastrado, este método será chamado quando a topologia for
aberta.

> **Nota**:
>
> Devido ao comportamento de
> [manipulação de conexão e persistência](mongodb.connection-handling.md)
> do driver, este evento pode não ser observado se um
> [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) usar um cliente
> [» libmongoc](https://github.com/mongodb/mongo-c-driver) persistido anteriormente.

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\TopologyOpeningEvent](class.mongodb-driver-monitoring-topologyopeningevent.md))
:   Um objeto de evento que encapsula informações sobre a topologia aberta.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\TopologyOpeningEvent](class.mongodb-driver-monitoring-topologyopeningevent.md)
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
