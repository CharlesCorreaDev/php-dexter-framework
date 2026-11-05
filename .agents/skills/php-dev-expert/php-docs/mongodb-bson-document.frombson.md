# Constrói uma nova instância de documento a partir de uma string BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.frombson.php

---

# MongoDB\BSON\Document::fromBSON

(mongodb >=1.16.0)

MongoDB\BSON\Document::fromBSON — Constrói uma nova instância de documento a partir de uma string BSON

### Descrição

final static public function **MongoDB\BSON\Document::fromBSON**([string](language.types.string.md) `$bson`): [MongoDB\BSON\Document](class.mongodb-bson-document.md)

### Parâmetros

`bson` ([string](language.types.string.md))
:   Uma string contendo um documento no formato BSON.

### Valor Retornado

Retorna uma nova instância de [MongoDB\BSON\Document](class.mongodb-bson-document.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se `bson` for uma string BSON inválida ou se contiver mais de um documento.

### Veja também

- [MongoDB\BSON\Document::fromPHP()](mongodb-bson-document.fromphp.md) - Constrói uma nova instância de documento a partir de dados PHP
- [MongoDB\BSON\Document::fromJSON()](mongodb-bson-document.fromjson.md) - Constrói uma nova instância de documento a partir de uma string JSON
- [» Tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-types/)

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
