# Obtém o primeiro dia da semana para a localidade do calendário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getfirstdayofweek.php

---

# IntlCalendar::getFirstDayOfWeek

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getFirstDayOfWeek — Obtém o primeiro dia da semana para a localidade do calendário

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getFirstDayOfWeek**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_first\_day\_of\_week**([IntlCalendar](class.intlcalendar.md) `$calendar`): [int](language.types.integer.md)|[false](language.types.singleton.md)

O dia da semana que inicia a semana, pode ser o valor padrão para esta
localidade ou o valor definido com
[IntlCalendar::setFirstDayOfWeek()](intlcalendar.setfirstdayofweek.md).

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Uma das constantes **`IntlCalendar::DOW_SUNDAY`**,
**`IntlCalendar::DOW_MONDAY`**, …,
**`IntlCalendar::DOW_SATURDAY`** ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getFirstDayOfWeek()****

```
<?php
ini_set('date.timezone', 'UTC');

$cal1 = IntlCalendar::createInstance(NULL, 'es_ES');
var_dump($cal1->getFirstDayOfWeek()); // segunda-feira
$cal1->set(2013, 1 /* fevereiro */, 3); // um domingo
var_dump($cal1->get(IntlCalendar::FIELD_WEEK_OF_YEAR)); // 5

$cal2 = IntlCalendar::createInstance(NULL, 'en_US');
var_dump($cal2->getFirstDayOfWeek()); // domingo
$cal2->set(2013, 1 /* fevereiro */, 3); // um domingo
var_dump($cal2->get(IntlCalendar::FIELD_WEEK_OF_YEAR)); // 6
```

O exemplo acima produzirá:

```
int(2)
int(5)
int(1)
int(6)
```

### Veja também

- [IntlCalendar::setFirstDayOfWeek()](intlcalendar.setfirstdayofweek.md) - Define o dia da semana no qual a semana inicia

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
