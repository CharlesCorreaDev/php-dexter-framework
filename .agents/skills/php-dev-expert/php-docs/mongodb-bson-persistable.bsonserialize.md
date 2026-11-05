# Fornece um array ou documento para serializar como BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-persistable.bsonserialize.php

---

# MongoDB\BSON\Persistable::bsonSerialize

(mongodb >=1.0.0)

MongoDB\BSON\Persistable::bsonSerialize — Fornece um array ou documento para serializar como BSON

### Descrição

abstract public function **MongoDB\BSON\Persistable::bsonSerialize**(): [array](language.types.array.md)|[stdClass](class.stdclass.md)|[MongoDB\BSON\Document](class.mongodb-bson-document.md)

Chamado durante a serialização do objeto para BSON. O método precisa retornar um
[array](language.types.array.md), uma [stdClass](class.stdclass.md) ou
um [MongoDB\BSON\Document](class.mongodb-bson-document.md).

O valor de retorno sempre será serializado como um documento BSON. O documento
serializado irá incluir um campo contendo o nome da classe do objeto. Por
esta razão, não é possível retornar uma instância de
[MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md) neste método.

Usuários são encorajados a incluir uma propriedade \_id (ex.: um
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) inicializado no construtor)
ao retornar dados para um documento nativo BSON. Na ausência se uma
propriedade \_id, a extensão ou servidor irá gerar um
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para operações de inserção ou
atualização, respectivamente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md), uma [stdClass](class.stdclass.md) ou um [MongoDB\BSON\Document](class.mongodb-bson-document.md)
a ser serializado como um documento BSON.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| PECL mongodb 1.17.0 | Este método agora também pode retornar instâncias de [MongoDB\BSON\Document](class.mongodb-bson-document.md) além de um [array](language.types.array.md) e uma [stdClass](class.stdclass.md). |

### Veja também

- [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) - Fornece um array ou documento para serializar como BSON
- [MongoDB\BSON\Unserializable::bsonUnserialize()](mongodb-bson-unserializable.bsonunserialize.md) - Constrói o objeto a partir de um array ou documento BSON
- [MongoDB\BSON\Persistable](class.mongodb-bson-persistable.md)
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
