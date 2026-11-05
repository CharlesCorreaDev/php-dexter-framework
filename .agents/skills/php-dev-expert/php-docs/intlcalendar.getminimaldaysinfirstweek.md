# Obtém o número mínimo de dias que a primeira semana do ano ou do mês pode ter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getminimaldaysinfirstweek.php

---

# IntlCalendar::getMinimalDaysInFirstWeek

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getMinimalDaysInFirstWeek — Obtém o número mínimo de dias que a primeira semana do ano ou do mês pode ter

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getMinimalDaysInFirstWeek**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_minimal\_days\_in\_first\_week**([IntlCalendar](class.intlcalendar.md) `$calendar`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o menor número de dias que a primeira semana do ano ou do mês deve
ter no novo ano ou no novo mês. Por exemplo, no calendário gregoriano, se
este valor for 1, então a primeira semana do ano necessariamente incluirá
1º de janeiro, enquanto que se este valor for 7, então a semana que contém 1º de janeiro
será a primeira semana do ano somente se o dia da semana para 1º de janeiro
corresponder ao dia da semana retornado por
[IntlCalendar::getFirstDayOfWeek()](intlcalendar.getfirstdayofweek.md); caso contrário será
a última semana do ano anterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Um [int](language.types.integer.md) representando o número de dias ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getMinimalDaysInFirstWeek()****

```
<?php
ini_set('date.timezone', 'UTC');
ini_set('intl.default_locale', 'en_US');

$cal = new IntlGregorianCalendar(2013, 0 /* janeiro */, 2);
var_dump(IntlDateFormatter::formatObject($cal, 'cccc')); // quarta-feira

var_dump($cal->getMinimalDaysInFirstWeek(), // 1
$cal->getFirstDayofWeek()); // 1 (domingo)

// Semana 1 de 2013
var_dump(IntlDateFormatter::formatObject($cal, "'Semana 'w' de 'Y"));

$cal->setMinimalDaysInFirstWeek(4);
// Ainda na semana 1 de 2013 (1ª semana tem 5 dias no novo ano)
var_dump(IntlDateFormatter::formatObject($cal, "'Semana 'w' de 'Y"));

$cal->setMinimalDaysInFirstWeek(6);
// Semana 53 de 2012
var_dump(IntlDateFormatter::formatObject($cal, "'Semana 'w' de 'Y"));
```

O exemplo acima produzirá:

```
string(9) "Wednesday"
int(1)
int(1)
string(14) "Semana 1 de 2013"
string(14) "Semana 1 de 2013"
string(15) "Semana 53 de 2012"
```

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
