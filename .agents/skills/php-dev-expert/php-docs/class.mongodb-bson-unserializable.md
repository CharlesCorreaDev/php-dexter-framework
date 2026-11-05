# A interface MongoDB\BSON\Unserializable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-unserializable.php

---

# A interface MongoDB\BSON\Unserializable

(mongodb >=1.0.0)

## Introdução

As classes que implementam esta interface podem ser especificadas em um
[mapa de tipos](mongodb.persistence.md#mongodb.persistence.typemaps) para
desserializar arrays e documentos BSON (nativos e incorporados).

## Resumo da Interface

class **MongoDB\BSON\Unserializable**
{

/\* Métodos \*/

abstract public function [bsonUnserialize](mongodb-bson-unserializable.bsonunserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\BSON\Unserializable::bsonUnserialize](mongodb-bson-unserializable.bsonunserialize.md) — Constrói o objeto a partir de um array ou documento BSON

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
