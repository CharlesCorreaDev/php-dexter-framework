# Obtém o número de recorrências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dateperiod.getrecurrences.php

---

# DatePeriod::getRecurrences

(PHP 7 >= 7.2.17/7.3.4, PHP 8)

DatePeriod::getRecurrences — Obtém o número de recorrências

### Descrição

Estilo orientado a objetos

public function **DatePeriod::getRecurrences**(): [?](language.types.null.md)[int](language.types.integer.md)

Obtém o número de recorrências.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de recorrências como definido explicitamente pelo parâmetro
`$recurrences` passado ao construtor da
classe [DatePeriod](class.dateperiod.md), ou **`null`** caso não tenha sido definido.

### Examples

**Exemplo #1 Diferentes valores para **DatePeriod::getRecurrences()****

```
<?php
$start = new DateTime('2018-12-31 00:00:00');
$end   = new DateTime('2021-12-31 00:00:00');
$interval = new DateInterval('P1M');
$recurrences = 5;

// recorrências definidas explicitamente através do construtor
$period = new DatePeriod($start, $interval, $recurrences, DatePeriod::EXCLUDE_START_DATE);
echo $period->getRecurrences(), "\n";

$period = new DatePeriod($start, $interval, $recurrences);
echo $period->getRecurrences(), "\n";

$period = new DatePeriod($start, $interval, $recurrences, DatePeriod::INCLUDE_END_DATE);
echo $period->getRecurrences(), "\n\n";

// recorrências não definidas no construtor
$period = new DatePeriod($start, $interval, $end);
var_dump($period->getRecurrences());

$period = new DatePeriod($start, $interval, $end, DatePeriod::EXCLUDE_START_DATE);
var_dump($period->getRecurrences());
```

O exemplo acima produzirá:

```
5
5
5

NULL
NULL
```

### Veja também

- [DatePeriod::$recurrences](class.dateperiod.md#dateperiod.props.recurrences)

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
