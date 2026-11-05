# A classe MongoDB\BSON\PackedArray

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-packedarray.php

---

# A classe MongoDB\BSON\PackedArray

(mongodb >=1.16.0)

## Introdução

Representa um array BSON. Esta classe é usada ao ler dados como BSON bruto
e não pode ser modificada.

## Resumo da classe

final

class **MongoDB\BSON\PackedArray**
implements
[MongoDB\BSON\Type](class.mongodb-bson-type.md), [ArrayAccess](class.arrayaccess.md), [IteratorAggregate](class.iteratoraggregate.md) {

/\* Métodos \*/

final private function [\_\_construct](mongodb-bson-packedarray.construct.md)()

final static public function [fromJSON](mongodb-bson-packedarray.fromjson.md)([string](language.types.string.md) `$json`): [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md)

final static public function [fromPHP](mongodb-bson-packedarray.fromphp.md)([array](language.types.array.md) `$value`): [MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md)

final public function [get](mongodb-bson-packedarray.get.md)([int](language.types.integer.md) `$key`): [mixed](language.types.mixed.md)

final public function [getIterator](mongodb-bson-packedarray.getiterator.md)(): [MongoDB\BSON\Iterator](class.mongodb-bson-iterator.md)

final public function [has](mongodb-bson-packedarray.has.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

final public function [offsetExists](mongodb-bson-packedarray.offsetexists.md)([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

final public function [offsetGet](mongodb-bson-packedarray.offsetget.md)([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

final public function [offsetSet](mongodb-bson-packedarray.offsetset.md)([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

final public function [offsetUnset](mongodb-bson-packedarray.offsetunset.md)([mixed](language.types.mixed.md) `$key`): [void](language.types.void.md)

final public function [toCanonicalExtendedJSON](mongodb-bson-packedarray.tocanonicalextendedjson.md)(): [string](language.types.string.md)

final public function [toPHP](mongodb-bson-packedarray.tophp.md)([?](language.types.null.md)[array](language.types.array.md) `$typeMap` = **`null`**): [array](language.types.array.md)|[object](language.types.object.md)

final public function [toRelaxedExtendedJSON](mongodb-bson-packedarray.torelaxedextendedjson.md)(): [string](language.types.string.md)

final public function [\_\_toString](mongodb-bson-packedarray.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.17.0 | Implementa [MongoDB\BSON\Type](class.mongodb-bson-type.md). |
| PECL mongodb 1.17.0 | **MongoDB\BSON\PackedArray** não pode ser serializado em contextos onde um documento BSON é esperado. Nas versões anteriores, o array BSON teria sido convertido em um documento. |

## Índice

- [MongoDB\BSON\PackedArray::\_\_construct](mongodb-bson-packedarray.construct.md) — Constrói um novo array BSON (não utilizado)
- [MongoDB\BSON\PackedArray::fromJSON](mongodb-bson-packedarray.fromjson.md) — Constrói uma nova instância de array BSON a partir de uma string JSON
- [MongoDB\BSON\PackedArray::fromPHP](mongodb-bson-packedarray.fromphp.md) — Constrói uma nova instância de array BSON a partir de dados PHP
- [MongoDB\BSON\PackedArray::get](mongodb-bson-packedarray.get.md) — Retorna o valor de um índice do array
- [MongoDB\BSON\PackedArray::getIterator](mongodb-bson-packedarray.getiterator.md) — Retorna um iterador para o array BSON
- [MongoDB\BSON\PackedArray::has](mongodb-bson-packedarray.has.md) — Informa se um índice está presente no array
- [MongoDB\BSON\PackedArray::offsetExists](mongodb-bson-packedarray.offsetexists.md) — Informa se um índice está presente no array
- [MongoDB\BSON\PackedArray::offsetGet](mongodb-bson-packedarray.offsetget.md) — Retorna o valor de um índice do array
- [MongoDB\BSON\PackedArray::offsetSet](mongodb-bson-packedarray.offsetset.md) — Implementação de ArrayAccess
- [MongoDB\BSON\PackedArray::offsetUnset](mongodb-bson-packedarray.offsetunset.md) — Implementação de ArrayAccess
- [MongoDB\BSON\PackedArray::toCanonicalExtendedJSON](mongodb-bson-packedarray.tocanonicalextendedjson.md) — Retorna a representação JSON Estendida Canônica do array BSON
- [MongoDB\BSON\PackedArray::toPHP](mongodb-bson-packedarray.tophp.md) — Retorna a representação PHP do array BSON
- [MongoDB\BSON\PackedArray::toRelaxedExtendedJSON](mongodb-bson-packedarray.torelaxedextendedjson.md) — Retorna a representação JSON estendida relaxada do array BSON
- [MongoDB\BSON\PackedArray::\_\_toString](mongodb-bson-packedarray.tostring.md) — Retorna a representação em string deste array BSON

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
