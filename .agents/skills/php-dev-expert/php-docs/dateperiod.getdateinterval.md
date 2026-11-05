# Obtém o intervalo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateperiod.getdateinterval.php

---

# DatePeriod::getDateInterval

(PHP 5 >= 5.6.5, PHP 7, PHP 8)

DatePeriod::getDateInterval — 
Obtém o intervalo

### Descrição

Estilo orientado a objetos

public function **DatePeriod::getDateInterval**(): [DateInterval](class.dateinterval.md)

Obtém um [object](language.types.object.md) da classe [DateInterval](class.dateinterval.md)
representando o intervalo usado para o período.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [object](language.types.object.md) [DateInterval](class.dateinterval.md).

### Examples

**Exemplo #1 Exemplo de **DatePeriod::getDateInterval()****

```
<?php
$period = DatePeriod::createFromIso8601String('R7/2016-05-16T00:00:00Z/P1D');
$interval = $period->getDateInterval();
echo $interval->format('%d day');
```

O exemplo acima produzirá:

```
1 day
```

### Veja também

- [DatePeriod::getStartDate()](dateperiod.getstartdate.md) - Obtém a data inicial
- [DatePeriod::getEndDate()](dateperiod.getenddate.md) - Obtém a data final

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
