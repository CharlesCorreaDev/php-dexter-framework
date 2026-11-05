# Método de notificação para fechamento de topologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-sdamsubscriber.topologyclosed.php

---

# MongoDB\Driver\Monitoring\SDAMSubscriber::topologyClosed

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\SDAMSubscriber::topologyClosed — Método de notificação para fechamento de topologia

### Descrição

abstract public function **MongoDB\Driver\Monitoring\SDAMSubscriber::topologyClosed**([MongoDB\Driver\Monitoring\TopologyClosedEvent](class.mongodb-driver-monitoring-topologyclosedevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver cadastrado, este método será chamado quando a topologia for
fechada.

> **Nota**:
>
> Devido ao comportamento de
> [manipulação de conexão e persistência](mongodb.connection-handling.md)
> do driver, este evento só pode ser observado quando um
> [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) é criado com a
> opção `"disableClientPersistence"` do driver e liberada antes
> do encerramento da solicitação (RSHUTDOWN).

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\TopologyClosedEvent](class.mongodb-driver-monitoring-topologyclosedevent.md))
:   Um objeto de evento que encapsula informações sobre a topologia fechada.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\TopologyClosedEvent](class.mongodb-driver-monitoring-topologyclosedevent.md)
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
