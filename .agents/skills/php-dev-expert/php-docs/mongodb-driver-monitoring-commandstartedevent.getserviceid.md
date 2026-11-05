# Retorna o ID de serviço do balanceador de carga para o comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandstartedevent.getserviceid.php

---

# MongoDB\Driver\Monitoring\CommandStartedEvent::getServiceId

(mongodb >=1.11.0)

MongoDB\Driver\Monitoring\CommandStartedEvent::getServiceId — Retorna o ID de serviço do balanceador de carga para o comando

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandStartedEvent::getServiceId**(): [?](language.types.null.md)[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md)

Quando o driver está conectado a um cluster MongoDB por meio de um balanceador de carga,
o ID do serviço corresponde ao campo `serviceId` na
resposta do comando `hello`.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID do serviço do balanceador de carga ou **`null`** se o driver não estiver
conectado a um balanceador de carga.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

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
