# Retorna a representação em DateTime deste UTCDateTimeInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-utcdatetimeinterface.todatetime.php

---

# MongoDB\BSON\UTCDateTimeInterface::toDateTime

(mongodb >=1.3.0)

MongoDB\BSON\UTCDateTimeInterface::toDateTime — Retorna a representação em DateTime deste UTCDateTimeInterface

### Descrição

abstract public function **MongoDB\BSON\UTCDateTimeInterface::toDateTime**(): [DateTime](class.datetime.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em [DateTime](class.datetime.md) deste
UTCDateTimeInterface. O [DateTime](class.datetime.md) retornado deve usar
o fuso horário UTC.

### Veja também

- [MongoDB\BSON\UTCDateTime::toDateTime()](mongodb-bson-utcdatetime.todatetime.md) - Retorna a representação em DateTime deste UTCDateTime

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
