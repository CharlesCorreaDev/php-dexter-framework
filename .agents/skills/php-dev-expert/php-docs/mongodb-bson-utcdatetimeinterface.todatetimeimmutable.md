# Retorna a representação DateTimeImmutable desta UTCDateTimeInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-utcdatetimeinterface.todatetimeimmutable.php

---

# MongoDB\BSON\UTCDateTimeInterface::toDateTimeImmutable

(mongodb >=2.0.0)

MongoDB\BSON\UTCDateTimeInterface::toDateTimeImmutable — Retorna a representação DateTimeImmutable desta UTCDateTimeInterface

### Descrição

abstract public function **MongoDB\BSON\UTCDateTimeInterface::toDateTimeImmutable**(): [DateTimeImmutable](class.datetimeimmutable.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação [DateTimeImmutable](class.datetimeimmutable.md) desta
UTCDateTimeInterface. O [DateTimeImmutable](class.datetimeimmutable.md) retornado usará o
fuso horário UTC.

### Veja também

- [MongoDB\BSON\UTCDateTime::toDateTimeImmutable()](mongodb-bson-utcdatetime.todatetimeimmutable.md) - Retorna a representação em DateTimeImmutable deste UTCDateTime

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
