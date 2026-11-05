# Cancela o registro de um assinante de evento de monitoramento globalmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mongodb.driver.monitoring.removesubscriber.php

---

# MongoDB\Driver\Monitoring\removeSubscriber

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\removeSubscriber — Cancela o registro de um assinante de evento de monitoramento globalmente

### Descrição

function **MongoDB\Driver\Monitoring\removeSubscriber**([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) `$subscriber`): [void](language.types.void.md)

Cancela o registro de um assinante de evento de monitoramento globalmente.

> **Nota**:
>
> Se o `subscriber` já não estiver registrado globalmente, esta
> função não fará nenhuma ação.

### Parâmetros

`subscriber` ([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md))
:   Um assinante de evento de monitoramento para cancelar o registro globalmente.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\addSubscriber()](function.mongodb.driver.monitoring.addsubscriber.md) - Registra um assinante de evento de monitoramento globalmente
- [MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md)
- [MongoDB\Driver\Monitoring\CommandSubscriber](class.mongodb-driver-monitoring-commandsubscriber.md)
- [MongoDB\Driver\Manager::removeSubscriber()](mongodb-driver-manager.removesubscriber.md) - Cancela o registro de um assinante de evento de monitoramento com este gerenciador
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
