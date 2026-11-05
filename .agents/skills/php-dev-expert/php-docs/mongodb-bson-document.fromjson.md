# Constrói uma nova instância de documento a partir de uma string JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.fromjson.php

---

# MongoDB\BSON\Document::fromJSON

(mongodb >=1.16.0)

MongoDB\BSON\Document::fromJSON — Constrói uma nova instância de documento a partir de uma string JSON

### Descrição

final static public function **MongoDB\BSON\Document::fromJSON**([string](language.types.string.md) `$json`): [MongoDB\BSON\Document](class.mongodb-bson-document.md)

Converte uma string
[» JSON estendida](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/)
na sua representação BSON.

### Parâmetros

`json` ([string](language.types.string.md))
:   Valor JSON a ser convertido.

### Valor Retornado

Retorna uma nova instância de [MongoDB\BSON\Document](class.mongodb-bson-document.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança
  [MongoDB\Driver\Exception\UnexpectedValueException](class.mongodb-driver-exception-unexpectedvalueexception.md) se
  o valor JSON não puder ser convertido para um documento BSON (por exemplo, devido a um erro
  de sintaxe).

### Veja também

- [MongoDB\BSON\Document::fromPHP()](mongodb-bson-document.fromphp.md) - Constrói uma nova instância de documento a partir de dados PHP
- [MongoDB\BSON\Document::fromBSON()](mongodb-bson-document.frombson.md) - Constrói uma nova instância de documento a partir de uma string BSON
- [» JSON Estendido do MongoDB](https://www.mongodb.com/docs/manual/reference/mongodb-extended-json/)
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
