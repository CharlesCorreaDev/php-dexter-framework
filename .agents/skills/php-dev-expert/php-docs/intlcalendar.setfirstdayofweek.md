# Define o dia da semana no qual a semana inicia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.setfirstdayofweek.php

---

# IntlCalendar::setFirstDayOfWeek

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::setFirstDayOfWeek — Define o dia da semana no qual a semana inicia

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::setFirstDayOfWeek**([int](language.types.integer.md) `$dayOfWeek`): [true](language.types.singleton.md)

Estilo procedural

function **intlcal\_set\_first\_day\_of\_week**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$dayOfWeek`): [true](language.types.singleton.md)

Define o dia da semana no qual a semana inicia. Isto afeta o comportamento
de campos que dependem do conceito de início e fim da semana tais como
**`IntlCalendar::FIELD_WEEK_OF_YEAR`** e
**`IntlCalendar::FIELD_YEAR_WOY`**.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`dayOfWeek`
:   Uma das constantes **`IntlCalendar::DOW_SUNDAY`**,
    **`IntlCalendar::DOW_MONDAY`**, …,
    **`IntlCalendar::DOW_SATURDAY`**.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 **IntlCalendar::setFirstDayOfWeek()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'es_ES');

$cal = IntlCalendar::createInstance();
$cal->set(2013, 5 /* junho */, 30); // um domingo

var_dump($cal->getFirstDayOfWeek()); // 2 (segunda-feira)

echo IntlDateFormatter::formatObject($cal, <<<EOD
'dia da semana local: 'cc'
semana do mês    : 'W'
semana do ano     : 'ww
EOD
), "\n";

$cal->setFirstDayOfWeek(IntlCalendar::DOW_SUNDAY);

echo IntlDateFormatter::formatObject($cal, <<<EOD
'dia da semana local: 'cc'
semana do mês    : 'W'
semana do ano     : 'ww
EOD
), "\n";
```

O exemplo acima produzirá:

```
int(2)
dia da semana local: 7
semana do mês    : 4
semana do ano     : 26
dia da semana local: 1
semana do mês    : 5
semana do ano     : 27
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
