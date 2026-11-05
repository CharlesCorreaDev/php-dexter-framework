# Inscreve um assinante de evento de monitoramento com este gerenciador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.addsubscriber.php

---

# MongoDB\Driver\Manager::addSubscriber

(mongodb >=1.10.0)

MongoDB\Driver\Manager::addSubscriber — Inscreve um assinante de evento de monitoramento com este gerenciador

### Descrição

final public function **MongoDB\Driver\Manager::addSubscriber**([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md) `$subscriber`): [void](language.types.void.md)

Inscreve um assinante de evento de monitoramento neste gerenciador.
O assinante será notificado de todos os eventos deste gerenciador.

> **Nota**:
>
> Se o `subscriber` já estiver inscrito neste
> gerenciador, esta função não fará nada. Se o `subscriber` também
> estiver inscrito globalmente, ele ainda será notificado apenas uma vez sobre
> cada evento deste gerenciador.

### Parâmetros

`subscriber` ([MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md))
:   Um assinante de evento de monitoramento para increver-se neste gerenciador.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma
  [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) se
  `subscriber` for um
  [MongoDB\Driver\Monitoring\LogSubscriber](class.mongodb-driver-monitoring-logsubscriber.md), já que
  registradores só podem ser inscritos globalmente.

### Veja também

- [MongoDB\Driver\Manager::removeSubscriber()](mongodb-driver-manager.removesubscriber.md) - Cancela o registro de um assinante de evento de monitoramento com este gerenciador
- [MongoDB\Driver\Monitoring\Subscriber](class.mongodb-driver-monitoring-subscriber.md)
- [MongoDB\Driver\Monitoring\CommandSubscriber](class.mongodb-driver-monitoring-commandsubscriber.md)
- [MongoDB\Driver\Monitoring\addSubscriber()](function.mongodb.driver.monitoring.addsubscriber.md) - Registra um assinante de evento de monitoramento globalmente
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
