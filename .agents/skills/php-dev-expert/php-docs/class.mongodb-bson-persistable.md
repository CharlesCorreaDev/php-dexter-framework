# A interface MongoDB\BSON\Persistable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-persistable.php

---

# A interface MongoDB\BSON\Persistable

(mongodb >=1.0.0)

## Introdução

As classes podem implementar esta interface para aproveitar o comportamento automático
do ODM (mapeamento de documento de objeto) na extensão. Durante a serialização,
a extensão injetará uma propriedade \_\_pclass
contendo o nome da classe PHP nos dados retornados por
[MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md). Durante
a desserialização, a mesma propriedade \_\_pclass será então
usada para inferir a classe PHP (independente de qualquer configuração
de [type map](mongodb.persistence.md#mongodb.persistence.typemaps))
a ser construída antes de
[MongoDB\BSON\Unserializable::bsonUnserialize()](mongodb-bson-unserializable.bsonunserialize.md) ser
invocada. Consulte [Dados Persistentes](mongodb.persistence.md) para obter
informações adicionais.

> **Nota**:
>
> Mesmo que [MongoDB\BSON\Serializable::bsonSerialize()](mongodb-bson-serializable.bsonserialize.md) retorne
> um array sequencial, a injeção da propriedade \_\_pclass
> fará com que o objeto seja serializado como um documento BSON.

## Resumo da Interface

class **MongoDB\BSON\Persistable**
implements
[MongoDB\BSON\Unserializable](class.mongodb-bson-unserializable.md), [MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md) {

/\* Métodos \*/

abstract public function [bsonSerialize](mongodb-bson-persistable.bsonserialize.md)(): [array](language.types.array.md)|[stdClass](class.stdclass.md)|[MongoDB\BSON\Document](class.mongodb-bson-document.md)

/\* Métodos herdados \*/

abstract public function [MongoDB\BSON\Serializable::bsonSerialize](mongodb-bson-serializable.bsonserialize.md)(): [array](language.types.array.md)|[stdClass](class.stdclass.md)|[MongoDB\BSON\Document](class.mongodb-bson-document.md)|[MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md)

abstract public function [MongoDB\BSON\Unserializable::bsonUnserialize](mongodb-bson-unserializable.bsonunserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Índice

- [MongoDB\BSON\Persistable::bsonSerialize](mongodb-bson-persistable.bsonserialize.md) — Fornece um array ou documento para serializar como BSON

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
