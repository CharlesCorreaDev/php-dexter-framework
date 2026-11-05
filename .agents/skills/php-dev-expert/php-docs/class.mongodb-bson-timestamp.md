# A classe MongoDB\BSON\Timestamp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-timestamp.php

---

# A classe MongoDB\BSON\Timestamp

(mongodb >=1.0.0)

## Introdução

Representa um
[» timestamp BSON](https://www.mongodb.com/docs/manual/reference/bson-types/#timestamps).
O valor consiste em um timestamp de 4 bytes (ou seja, segundos desde a época)
e um incremento de 4 bytes.

> **Nota**:
>
> Este é um tipo interno do MongoDB usado para replicação e fragmentação. Não se
> destina ao armazenamento geral de datas
> ([MongoDB\BSON\UTCDateTime](class.mongodb-bson-utcdatetime.md) deve ser usado em seu lugar).

## Resumo da classe

final

class **MongoDB\BSON\Timestamp**
implements
[MongoDB\BSON\TimestampInterface](class.mongodb-bson-timestampinterface.md), [MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-timestamp.construct.md)([int](language.types.integer.md) `$increment`, [int](language.types.integer.md) `$timestamp`)

final public function [getIncrement](mongodb-bson-timestamp.getincrement.md)(): [int](language.types.integer.md)

final public function [getTimestamp](mongodb-bson-timestamp.gettimestamp.md)(): [int](language.types.integer.md)

final public function [jsonSerialize](mongodb-bson-timestamp.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [\_\_toString](mongodb-bson-timestamp.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |
| PECL mongodb 1.3.0 | Implementa [MongoDB\BSON\TimestampInterface](class.mongodb-bson-timestampinterface.md). |
| PECL mongodb 1.2.0 | Implementa [Serializable](class.serializable.md) e [JsonSerializable](class.jsonserializable.md). |

## Índice

- [MongoDB\BSON\Timestamp::\_\_construct](mongodb-bson-timestamp.construct.md) — Constrói um novo Timestamp
- [MongoDB\BSON\Timestamp::getIncrement](mongodb-bson-timestamp.getincrement.md) — Retorna o componente de incremento deste Timestamp
- [MongoDB\BSON\Timestamp::getTimestamp](mongodb-bson-timestamp.gettimestamp.md) — Retorna o componente de timestamp deste Timestamp
- [MongoDB\BSON\Timestamp::jsonSerialize](mongodb-bson-timestamp.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\Timestamp::\_\_toString](mongodb-bson-timestamp.tostring.md) — Retorna a representação em string deste Timestamp

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
