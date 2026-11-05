# Constrói uma nova instância de documento a partir de dados PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.fromphp.php

---

# MongoDB\BSON\Document::fromPHP

(mongodb >=1.16.0)

MongoDB\BSON\Document::fromPHP — Constrói uma nova instância de documento a partir de dados PHP

### Descrição

final static public function **MongoDB\BSON\Document::fromPHP**([object](language.types.object.md)|[array](language.types.array.md) `$value`): [MongoDB\BSON\Document](class.mongodb-bson-document.md)

### Parâmetros

`value` ([object](language.types.object.md)|[array](language.types.array.md))
:   Um objeto ou array do PHP contendo o documento. Ao passar um array com
    chaves numéricas, os valores numéricos são convertidos para strings e usados como
    chaves do documento.

### Valor Retornado

Retorna uma nova instância de [MongoDB\BSON\Document](class.mongodb-bson-document.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Veja também

- [MongoDB\BSON\Document::fromBSON()](mongodb-bson-document.frombson.md) - Constrói uma nova instância de documento a partir de uma string BSON
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
