# Retorna o ID da operação do comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandfailedevent.getoperationid.php

---

# MongoDB\Driver\Monitoring\CommandFailedEvent::getOperationId

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandFailedEvent::getOperationId — Retorna o ID da operação do comando

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandFailedEvent::getOperationId**(): [string](language.types.string.md)

O ID da operação é gerado pela extensão e pode ser usado para vincular eventos,
como operações de gravação em massa, que podem ter sido divididas em
vários comandos no nível do protocolo.

> **Nota**:
>
> Como vários comandos podem compartilhar o mesmo ID de operação, não é confiável
> usar esse valor para associar objetos de evento entre si. O ID da solicitação
> retornado por
> [MongoDB\Driver\Monitoring\CommandFailedEvent::getRequestId()](mongodb-driver-monitoring-commandfailedevent.getrequestid.md)
> deve ser usado nesse caso.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID da operação do comando.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\Driver\Monitoring\CommandStartedEvent::getOperationId()](mongodb-driver-monitoring-commandstartedevent.getoperationid.md) - Retorna o ID da operação do comando
- [MongoDB\Driver\Monitoring\CommandFailedEvent::getRequestId()](mongodb-driver-monitoring-commandfailedevent.getrequestid.md) - Retorna o ID da solicitação do comando
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
