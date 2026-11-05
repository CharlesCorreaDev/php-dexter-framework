# Método de notificação para uma alteração na descrição do servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-sdamsubscriber.serverchanged.php

---

# MongoDB\Driver\Monitoring\SDAMSubscriber::serverChanged

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\SDAMSubscriber::serverChanged — Método de notificação para uma alteração na descrição do servidor

### Descrição

abstract public function **MongoDB\Driver\Monitoring\SDAMSubscriber::serverChanged**([MongoDB\Driver\Monitoring\ServerChangedEvent](class.mongodb-driver-monitoring-serverchangedevent.md) `$event`): [void](language.types.void.md)

Se o assinante estiver registrado, esse método será chamado quando a descrição do
servidor for alterada. Por exemplo, a mudança do tipo de servidor de secundário para
primário faria com que a descrição do servidor mudasse.

### Parâmetros

`event` ([MongoDB\Driver\Monitoring\ServerChangedEvent](class.mongodb-driver-monitoring-serverchangedevent.md))
:   Um objeto de evento que encapsula informações sobre a descrição alterada
    do servidor.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\ServerChangedEvent](class.mongodb-driver-monitoring-serverchangedevent.md)
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
