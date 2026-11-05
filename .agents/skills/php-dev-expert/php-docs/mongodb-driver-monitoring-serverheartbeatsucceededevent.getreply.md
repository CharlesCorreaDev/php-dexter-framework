# Retorna o documento de resposta da pulsação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-serverheartbeatsucceededevent.getreply.php

---

# MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getReply

(mongodb >=1.13.0)

MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getReply — Retorna o documento de resposta da pulsação

### Descrição

final public function **MongoDB\Driver\Monitoring\ServerHeartbeatSucceededEvent::getReply**(): [object](language.types.object.md)

O documento de resposta será convertido de BSON para PHP usando as regras padrão
de [desserialização](mongodb.persistence.md#mongodb.persistence.deserialization)
(por exemplo, documentos BSON serão convertidos para [stdClass](class.stdclass.md)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o documento de resposta de pulsação como um objeto
[stdClass](class.stdclass.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [Monitoramento de Desempenho de Aplicação (APM)](mongodb.tutorial.apm.md)
- [Dados Persistentes](mongodb.persistence.md)

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
