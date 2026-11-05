# A classe MongoDB\BSON\UTCDateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-utcdatetime.php

---

# A classe MongoDB\BSON\UTCDateTime

(mongodb >=1.0.0)

## Introdução

Representa uma
[» data BSON](https://www.mongodb.com/docs/manual/reference/bson-types/#date). O valor
é um número inteiro de 64 bits que representa o número de milissegundos desde a
época Unix (1º de janeiro de 1970). Valores negativos representam datas anteriores a 1970.

## Resumo da classe

final

class **MongoDB\BSON\UTCDateTime**
implements
[MongoDB\BSON\UTCDateTimeInterface](class.mongodb-bson-utcdatetimeinterface.md), [MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-utcdatetime.construct.md)([int](language.types.integer.md)|[MongoDB\BSON\Int64](class.mongodb-bson-int64.md)|[DateTimeInterface](class.datetimeinterface.md)|[null](language.types.null.md) `$milliseconds` = **`null`**)

final public function [jsonSerialize](mongodb-bson-utcdatetime.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [toDateTime](mongodb-bson-utcdatetime.todatetime.md)(): [DateTime](class.datetime.md)

final public function [toDateTimeImmutable](mongodb-bson-utcdatetime.todatetimeimmutable.md)(): [DateTimeImmutable](class.datetimeimmutable.md)

final public function [\_\_toString](mongodb-bson-utcdatetime.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |
| PECL mongodb 1.3.0 | Implementa [MongoDB\BSON\UTCDateTimeInterface](class.mongodb-bson-utcdatetimeinterface.md). |
| PECL mongodb 1.2.0 | Implementa [Serializable](class.serializable.md) e [JsonSerializable](class.jsonserializable.md). |

## Índice

- [MongoDB\BSON\UTCDateTime::\_\_construct](mongodb-bson-utcdatetime.construct.md) — Constrói um novo UTCDateTime
- [MongoDB\BSON\UTCDateTime::jsonSerialize](mongodb-bson-utcdatetime.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\UTCDateTime::toDateTime](mongodb-bson-utcdatetime.todatetime.md) — Retorna a representação em DateTime deste UTCDateTime
- [MongoDB\BSON\UTCDateTime::toDateTimeImmutable](mongodb-bson-utcdatetime.todatetimeimmutable.md) — Retorna a representação em DateTimeImmutable deste UTCDateTime
- [MongoDB\BSON\UTCDateTime::\_\_toString](mongodb-bson-utcdatetime.tostring.md) — Retorna a representação em string deste UTCDateTime

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
