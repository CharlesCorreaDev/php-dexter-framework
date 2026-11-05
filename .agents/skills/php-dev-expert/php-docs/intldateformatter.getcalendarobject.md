# Obtém uma cópia do objeto de calendário do formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.getcalendarobject.php

---

# IntlDateFormatter::getCalendarObject

# datefmt\_get\_calendar\_object

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0)

IntlDateFormatter::getCalendarObject -- datefmt\_get\_calendar\_object — Obtém uma cópia do objeto de calendário do formatador

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::getCalendarObject**(): [IntlCalendar](class.intlcalendar.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Estilo procedural

function **datefmt\_get\_calendar\_object**([IntlDateFormatter](class.intldateformatter.md) `$formatter`): [IntlCalendar](class.intlcalendar.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

Obtém uma cópia do objeto de calendário usado internamente pelo formatador. Este
calendário terá um tipo (como gregoriano, japonês, budista, persa,
islâmico, etc.) e um fuso horário que corresponde ao tipo e ao fuso usados pelo
formatador. A data e o horário do objeto não são especificados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma cópia do objeto de calendário interno usado pelo formatador,
ou **`null`** se nenhum foi definido, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **IntlDateFormatter::getCalendarObject()****

```
<?php
$formatter = IntlDateFormatter::create(
    "fr_FR@calendar=islamic",
    NULL,
    NULL,
    "GMT-01:00",
    IntlDateFormatter::TRADITIONAL
);

$cal = $formatter->getCalendarObject();

var_dump(
    $cal->getType(),
    $cal->getTimeZone(),
    $cal->getLocale(Locale::VALID_LOCALE)
);
```

O exemplo acima produzirá:

```
string(7) "islamic"
object(IntlTimeZone)#3 (4) {
  ["valid"]=>
  bool(true)
  ["id"]=>
  string(9) "GMT-01:00"
  ["rawOffset"]=>
  int(-3600000)
  ["currentOffset"]=>
  int(-3600000)
}
string(5) "fr_FR"
```

### Veja também

- [IntlDateFormatter::getCalendar()](intldateformatter.getcalendar.md) - Obtém o tipo de calendário usado para o IntlDateFormatter
- [IntlDateFormatter::setCalendar()](intldateformatter.setcalendar.md) - Define o tipo de calendário usado pelo formatador
- [IntlCalendar](class.intlcalendar.md)

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
