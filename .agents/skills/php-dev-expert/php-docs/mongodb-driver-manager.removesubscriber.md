# Cancela o registro de um assinante de evento de monitoramento com este gerenciador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.removesubscriber.php

---

# MongoDB\Driver\Manager::removeSubscriber

(mongodb >=1.10.0)

MongoDB\Driver\Manager::removeSubscriber — Cancela o registro de um assinante de evento de monitoramento com este gerenciador

### Descrição

final public function **MongoDB\Driver\Manager::removeSubscriber**([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) `$subscriber`): [void](language.types.void.md)

Cancela o registro de um assinante de evento de monitoramento com este gerenciador.

> **Nota**:
>
> Se o `subscriber` ainda não estiver registrado neste
> gerenciador, esta função não fará nenhuma ação.

### Parâmetros

`subscriber` ([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md))
:   Um assinante do evento de monitoramento para cancelar o registro neste gerenciador.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Manager::addSubscriber()](mongodb-driver-manager.addsubscriber.md) - Inscreve um assinante de evento de monitoramento com este gerenciador
- [MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md)
- [MongoDB\Driver\Monitoring\CommandSubscriber](class.mongodb-driver-monitoring-commandsubscriber.md)
- [MongoDB\Driver\Monitoring\removeSubscriber()](function.mongodb.driver.monitoring.removesubscriber.md) - Cancela o registro de um assinante de evento de monitoramento globalmente
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
