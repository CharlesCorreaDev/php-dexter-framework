# Registra um assinante de evento de monitoramento globalmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mongodb.driver.monitoring.addsubscriber.php

---

# MongoDB\Driver\Monitoring\addSubscriber

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\addSubscriber — Registra um assinante de evento de monitoramento globalmente

### Descrição

function **MongoDB\Driver\Monitoring\addSubscriber**([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) `$subscriber`): [void](language.types.void.md)

Registra um assinante de evento de monitoramento globalmente. O assinante será
notificado de todos os eventos da extensão para qualquer Maanger.

> **Nota**:
>
> Se o `subscriber` já estiver registrado globalmente, esta
> função não fará nenhuma ação. Se o `subscriber` também estiver registrado
> com um ou mais Managers, ele ainda será notificado apenas uma vez sobre cada
> evento para cada Manager.

### Parâmetros

`subscriber` ([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md))
:   Um assinante de evento de monitoramento para registrar globalmente.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\removeSubscriber()](function.mongodb.driver.monitoring.removesubscriber.md) - Cancela o registro de um assinante de evento de monitoramento globalmente
- [MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md)
- [MongoDB\Driver\Monitoring\CommandSubscriber](class.mongodb-driver-monitoring-commandsubscriber.md)
- [MongoDB\Driver\Manager::addSubscriber()](mongodb-driver-manager.addsubscriber.md) - Inscreve um assinante de evento de monitoramento com este gerenciador
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
