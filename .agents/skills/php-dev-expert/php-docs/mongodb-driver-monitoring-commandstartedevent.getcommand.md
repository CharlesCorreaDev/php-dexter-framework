# Retorna o documento de comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-monitoring-commandstartedevent.getcommand.php

---

# MongoDB\Driver\Monitoring\CommandStartedEvent::getCommand

(mongodb >=1.3.0)

MongoDB\Driver\Monitoring\CommandStartedEvent::getCommand — Retorna o documento de comando

### Descrição

final public function **MongoDB\Driver\Monitoring\CommandStartedEvent::getCommand**(): [object](language.types.object.md)

O documento de resposta será convertido de BSON para PHP usando as regras padrão de
[desserialização](mongodb.persistence.md#mongodb.persistence.deserialization)
(por exemplo, documentos BSON serão convertidos para [stdClass](class.stdclass.md)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o documento de comando como um objeto [stdClass](class.stdclass.md).

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
