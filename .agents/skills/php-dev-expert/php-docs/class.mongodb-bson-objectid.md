# A classe MongoDB\BSON\ObjectId

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-objectid.php

---

# A classe MongoDB\BSON\ObjectId

(mongodb >=1.0.0)

## Introdução

Tipo BSON para um
[» ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid). O
valor consiste em 12 bytes, onde os primeiros quatro bytes são um timestamp
que reflete a criação do ObjectId. Especificamente, o valor consiste em:

- um valor de 4 bytes que representa os segundos desde a época Unix,
- um número aleatório de 5 bytes único para um equipamento e um processo, e
- um contador de 3 bytes, começando com um valor aleatório.

No MongoDB, cada documento armazenado em uma coleção requer um campo
`_id` exclusivo que atua como chave primária. Se um documento
inserido omitir o campo `_id`, a extensão gera automaticamente
um ObjectId para o campo `_id`.

Usar ObjectIds para o campo `_id` fornece os seguintes
benefícios adicionais:

- O horário de criação do ObjectId pode ser acessado usando o método [MongoDB\BSON\ObjectId::getTimestamp()](mongodb-bson-objectid.gettimestamp.md).
- A classificação em um campo `_id` que armazena valores ObjectId é aproximadamente equivalente à classificação por horário de criação.

## Resumo da classe

final

class **MongoDB\BSON\ObjectId**
implements
[MongoDB\BSON\ObjectIdInterface](class.mongodb-bson-objectidinterface.md), [MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-objectid.construct.md)([?](language.types.null.md)[string](language.types.string.md) `$id` = **`null`**)

final public function [getTimestamp](mongodb-bson-objectid.gettimestamp.md)(): [int](language.types.integer.md)

final public function [jsonSerialize](mongodb-bson-objectid.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [\_\_toString](mongodb-bson-objectid.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |
| PECL mongodb 1.3.0 | Renomeado de `MongoDB\BSON\ObjectID` para `MongoDB\BSON\ObjectId`.  Implementa [MongoDB\BSON\ObjectIdInterface](class.mongodb-bson-objectidinterface.md). |
| PECL mongodb 1.2.0 | Implementa [Serializable](class.serializable.md) e [JsonSerializable](class.jsonserializable.md). |

## Índice

- [MongoDB\BSON\ObjectId::\_\_construct](mongodb-bson-objectid.construct.md) — Constrói um novo ObjectId
- [MongoDB\BSON\ObjectId::getTimestamp](mongodb-bson-objectid.gettimestamp.md) — Retorna o componente timestamp deste ObjectId
- [MongoDB\BSON\ObjectId::jsonSerialize](mongodb-bson-objectid.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\ObjectId::\_\_toString](mongodb-bson-objectid.tostring.md) — Retorna a representação hexadecimal deste ObjectId

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
