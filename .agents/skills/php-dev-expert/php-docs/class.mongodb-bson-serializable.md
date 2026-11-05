# A interface MongoDB\BSON\Serializable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-serializable.php

---

# A interface MongoDB\BSON\Serializable

(mongodb >=1.0.0)

## Introdução

As classes que implementam esta interface podem retornar dados para serem serializados como um
array ou documento BSON no lugar das propriedades públicas do objeto.

## Resumo da Interface

class **MongoDB\BSON\Serializable**
implements
[MongoDB\BSON\Type](class.mongodb-bson-type.md) {

/\* Métodos \*/

abstract public function [bsonSerialize](mongodb-bson-serializable.bsonserialize.md)(): [array](language.types.array.md)|[stdClass](class.stdclass.md)|[MongoDB\BSON\Document](class.mongodb-bson-document.md)|[MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\BSON\Serializable::bsonSerialize](mongodb-bson-serializable.bsonserialize.md) — Fornece um array ou documento para serializar como BSON

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
