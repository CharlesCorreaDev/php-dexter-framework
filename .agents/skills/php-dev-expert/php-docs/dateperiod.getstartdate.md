# Obtém a data inicial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateperiod.getstartdate.php

---

# DatePeriod::getStartDate

(PHP 5 >= 5.6.5, PHP 7, PHP 8)

DatePeriod::getStartDate — 
Obtém a data inicial

### Descrição

Estilo orientado a objetos

public function **DatePeriod::getStartDate**(): [DateTimeInterface](class.datetimeinterface.md)

Obtém a data inicial do período.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [object](language.types.object.md) [DateTimeImmutable](class.datetimeimmutable.md)
quando o [DatePeriod](class.dateperiod.md) é inicializado com um
[object](language.types.object.md) [DateTimeImmutable](class.datetimeimmutable.md)
no parâmetro `start`.

Caso contrário, retorna um [object](language.types.object.md)
[DateTime](class.datetime.md).

### Examples

**Exemplo #1 Exemplo de **DatePeriod::getStartDate()****

```
<?php
$period = DatePeriod::createFromIso8601String('R7/2016-05-16T00:00:00Z/P1D');
$start = $period->getStartDate();
echo $start->format(DateTime::ISO8601);
```

O exemplo acima produzirá:

```
2016-05-16T00:00:00+0000
```

### Veja também

- [DatePeriod::getEndDate()](dateperiod.getenddate.md) - Obtém a data final
- [DatePeriod::getDateInterval()](dateperiod.getdateinterval.md) - Obtém o intervalo

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
