# Obtém a data final

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateperiod.getenddate.php

---

# DatePeriod::getEndDate

(PHP 5 >= 5.6.5, PHP 7, PHP 8)

DatePeriod::getEndDate — 
Obtém a data final

### Descrição

Estilo orientado a objetos

public function **DatePeriod::getEndDate**(): [?](language.types.null.md)[DateTimeInterface](class.datetimeinterface.md)

Obtém a data final do período.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`null`** se o [DatePeriod](class.dateperiod.md)
não tiver uma data final. Por exemplo, quando inicializado com o
parâmetro `recurrences` ou
`isostr` sem uma
data final.

Retorna um [object](language.types.object.md) [DateTimeImmutable](class.datetimeimmutable.md)
quando o [DatePeriod](class.dateperiod.md) é inicializado com um
[object](language.types.object.md) [DateTimeImmutable](class.datetimeimmutable.md)
no parâmetro `end`.

Caso contrário, retorna um clone do [object](language.types.object.md) [DateTime](class.datetime.md)
representando a data final.

### Examples

**Exemplo #1 Exemplo de **DatePeriod::getEndDate()****

```
<?php
$period = new DatePeriod(
    new DateTime('2016-05-16T00:00:00Z'),
    new DateInterval('P1D'),
    new DateTime('2016-05-20T00:00:00Z')
);
$start = $period->getEndDate();
echo $start->format(DateTime::ISO8601);
```

Os exemplos acima produzirão:

```
2016-05-20T00:00:00+0000
```

**Exemplo #2 Exemplo de **DatePeriod::getEndDate()** sem uma data final**

```
<?php
$period = new DatePeriod(
    new DateTime('2016-05-16T00:00:00Z'),
    new DateInterval('P1D'),
    7
);
var_dump($period->getEndDate());
```

O exemplo acima produzirá:

```
NULL
```

### Veja também

- [DatePeriod::getStartDate()](dateperiod.getstartdate.md) - Obtém a data inicial
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
