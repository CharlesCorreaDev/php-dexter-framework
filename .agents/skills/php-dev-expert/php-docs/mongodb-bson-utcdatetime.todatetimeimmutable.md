# Retorna a representação em DateTimeImmutable deste UTCDateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-utcdatetime.todatetimeimmutable.php

---

# MongoDB\BSON\UTCDateTime::toDateTimeImmutable

(mongodb >=1.20.0)

MongoDB\BSON\UTCDateTime::toDateTimeImmutable — Retorna a representação em DateTimeImmutable deste UTCDateTime

### Descrição

final public function **MongoDB\BSON\UTCDateTime::toDateTimeImmutable**(): [DateTimeImmutable](class.datetimeimmutable.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em [DateTimeImmutable](class.datetimeimmutable.md) deste
UTCDateTime. O [DateTimeImmutable](class.datetimeimmutable.md) retornado usará o fuso
horário UTC.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.

### Examples

**Exemplo #1 Exemplo de **MongoDB\BSON\UTCDatetime::toDateTimeImmutable()****

```
<?php

$utcdatetime = new MongoDB\BSON\UTCDateTime(1416445411987);
$datetime = $utcdatetime->toDateTimeImmutable();
var_dump($datetime->format('r'));
var_dump($datetime->format('U.u'));
var_dump($datetime->getTimezone());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(31) "Thu, 20 Nov 2014 01:03:31 +0000"
string(17) "1416445411.987000"
object(DateTimeZone)#3 (2) {
  ["timezone_type"]=>
  int(1)
  ["timezone"]=>
  string(6) "+00:00"
}
```

### Veja também

- [MongoDB\BSON\UTCDateTime::toDateTime()](mongodb-bson-utcdatetime.todatetime.md) - Retorna a representação em DateTime deste UTCDateTime
- [» Tipos BSON: Data](https://www.mongodb.com/docs/manual/reference/bson-types/#date)

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
