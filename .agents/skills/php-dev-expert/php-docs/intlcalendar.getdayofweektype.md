# Informa se o dia é dia de semana, de final de semana ou de transição entre os dois

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getdayofweektype.php

---

# IntlCalendar::getDayOfWeekType

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getDayOfWeekType — Informa se o dia é dia de semana, de final de semana ou de transição entre os dois

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getDayOfWeekType**([int](language.types.integer.md) `$dayOfWeek`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_day\_of\_week\_type**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$dayOfWeek`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna se o dia informado é um dia de semana
(**`IntlCalendar::DOW_TYPE_WEEKDAY`**), de final de semana
(**`IntlCalendar::DOW_TYPE_WEEKEND`**), ou um dia durante o qual uma
transição ocorre entrando no final de semana
(**`IntlCalendar::DOW_TYPE_WEEKEND_OFFSET`**) ou um dia durante o qual
o final de semana termina
(**`IntlCalendar::DOW_TYPE_WEEKEND_CEASE`**).

Se o valor de retorno for
**`IntlCalendar::DOW_TYPE_WEEKEND_OFFSET`** ou
**`IntlCalendar::DOW_TYPE_WEEKEND_CEASE`**, então
pode-se chamar [IntlCalendar::getWeekendTransition()](intlcalendar.getweekendtransition.md) para
se obter o horário da transição.

Esta função requer a ICU 4.4 ou posterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`dayOfWeek`
:   Uma das constantes **`IntlCalendar::DOW_SUNDAY`**,
    **`IntlCalendar::DOW_MONDAY`**, …,
    **`IntlCalendar::DOW_SATURDAY`**.

### Valor Retornado

Retorna uma das constantes
**`IntlCalendar::DOW_TYPE_WEEKDAY`**,
**`IntlCalendar::DOW_TYPE_WEEKEND`**,
**`IntlCalendar::DOW_TYPE_WEEKEND_OFFSET`** ou
**`IntlCalendar::DOW_TYPE_WEEKEND_CEASE`** ou **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getDayOfWeekType()****

```
<?php
foreach (array('en_US', 'ar_SA') as $locale) {
    echo "Localidade: ", Locale::getDisplayName($locale, "en_US"), "\n";

    $cal = IntlCalendar::createInstance('UTC', $locale);

    for ($i = IntlCalendar::DOW_SUNDAY; $i <= IntlCalendar::DOW_SATURDAY; $i++) {
        $type = $cal->getDayOfWeekType($i);
        $transition = ($type !== IntlCalendar::DOW_TYPE_WEEKDAY)
            ? $cal->getWeekendTransition($i)
            : '';
        echo $i, " ", $type, " ", $transition, "\n";
    }
    echo "\n";
}
?>
```

O exemplo acima produzirá:

```
Localidade: English (United States)
1 1 86400000
2 0
3 0
4 0
5 0
6 0
7 1 0

Localidade: Arabic (Saudi Arabia)
1 0
2 0
3 0
4 0
5 0
6 1 0
7 1 86400000
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
