# A classe MongoDB\BSON\Document

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-document.php

---

# A classe MongoDB\BSON\Document

(mongodb >=1.16.0)

## Introdução

Representa um documento BSON. Esta classe é usada ao ler dados como BSON bruto
e não pode ser modificada.

## Resumo da classe

final

class **MongoDB\BSON\Document**
implements
[MongoDB\BSON\Type](class.mongodb-bson-type.md), [ArrayAccess](class.arrayaccess.md), [IteratorAggregate](class.iteratoraggregate.md) {

/\* Métodos \*/

final private function [\_\_construct](mongodb-bson-document.construct.md)()

final static public function [fromBSON](mongodb-bson-document.frombson.md)([string](language.types.string.md) `$bson`): [MongoDB\BSON\Document](class.mongodb-bson-document.md)

final static public function [fromJSON](mongodb-bson-document.fromjson.md)([string](language.types.string.md) `$json`): [MongoDB\BSON\Document](class.mongodb-bson-document.md)

final static public function [fromPHP](mongodb-bson-document.fromphp.md)([object](language.types.object.md)|[array](language.types.array.md) `$value`): [MongoDB\BSON\Document](class.mongodb-bson-document.md)

final public function [get](mongodb-bson-document.get.md)([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

final public function [getIterator](mongodb-bson-document.getiterator.md)(): [MongoDB\BSON\Iterator](class.mongodb-bson-iterator.md)

final public function [has](mongodb-bson-document.has.md)([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

final public function [offsetExists](mongodb-bson-document.offsetexists.md)([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

final public function [offsetGet](mongodb-bson-document.offsetget.md)([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

final public function [offsetSet](mongodb-bson-document.offsetset.md)([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

final public function [offsetUnset](mongodb-bson-document.offsetunset.md)([mixed](language.types.mixed.md) `$key`): [void](language.types.void.md)

final public function [toCanonicalExtendedJSON](mongodb-bson-document.tocanonicalextendedjson.md)(): [string](language.types.string.md)

final public function [toPHP](mongodb-bson-document.tophp.md)([?](language.types.null.md)[array](language.types.array.md) `$typeMap` = **`null`**): [array](language.types.array.md)|[object](language.types.object.md)

final public function [toRelaxedExtendedJSON](mongodb-bson-document.torelaxedextendedjson.md)(): [string](language.types.string.md)

final public function [\_\_toString](mongodb-bson-document.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.17.0 | Implementa [MongoDB\BSON\Type](class.mongodb-bson-type.md). |

## Índice

- [MongoDB\BSON\Document::\_\_construct](mongodb-bson-document.construct.md) — Constrói um novo documento BSON (não utilizado)
- [MongoDB\BSON\Document::fromBSON](mongodb-bson-document.frombson.md) — Constrói uma nova instância de documento a partir de uma string BSON
- [MongoDB\BSON\Document::fromJSON](mongodb-bson-document.fromjson.md) — Constrói uma nova instância de documento a partir de uma string JSON
- [MongoDB\BSON\Document::fromPHP](mongodb-bson-document.fromphp.md) — Constrói uma nova instância de documento a partir de dados PHP
- [MongoDB\BSON\Document::get](mongodb-bson-document.get.md) — Retorna o valor de uma chave no documento
- [MongoDB\BSON\Document::getIterator](mongodb-bson-document.getiterator.md) — Retorna um iterador para o documento BSON
- [MongoDB\BSON\Document::has](mongodb-bson-document.has.md) — Informa se uma chave está presente no documento
- [MongoDB\BSON\Document::offsetExists](mongodb-bson-document.offsetexists.md) — Informa se uma chave está presente no documento
- [MongoDB\BSON\Document::offsetGet](mongodb-bson-document.offsetget.md) — Retorna o valor de uma chave no documento
- [MongoDB\BSON\Document::offsetSet](mongodb-bson-document.offsetset.md) — Implementação de ArrayAccess
- [MongoDB\BSON\Document::offsetUnset](mongodb-bson-document.offsetunset.md) — Implementação de ArrayAccess
- [MongoDB\BSON\Document::toCanonicalExtendedJSON](mongodb-bson-document.tocanonicalextendedjson.md) — Retorna a representação JSON estendida canônica do documento BSON
- [MongoDB\BSON\Document::toPHP](mongodb-bson-document.tophp.md) — Retorna a representação PHP do documento BSON
- [MongoDB\BSON\Document::toRelaxedExtendedJSON](mongodb-bson-document.torelaxedextendedjson.md) — Retorna a representação JSON Estentida Relaxada do documento BSON
- [MongoDB\BSON\Document::\_\_toString](mongodb-bson-document.tostring.md) — Retorna a representação em string deste documento BSON

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
