# Retorna um objeto para serialização BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-serverapi.bsonserialize.php

---

# MongoDB\Driver\ServerApi::bsonSerialize

(mongodb >=1.10.0)

MongoDB\Driver\ServerApi::bsonSerialize — Retorna um objeto para serialização BSON

### Descrição

final public function **MongoDB\Driver\ServerApi::bsonSerialize**(): [stdClass](class.stdclass.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto para serializar o ServerApi como BSON.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) - Fornece um array ou documento para serializar como BSON

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
