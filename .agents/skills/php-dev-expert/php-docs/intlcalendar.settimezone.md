# Define o fuso horário usado por este calendário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.settimezone.php

---

# IntlCalendar::setTimeZone

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::setTimeZone — Define o fuso horário usado por este calendário

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::setTimeZone**([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_set\_time\_zone**([IntlCalendar](class.intlcalendar.md) `$calendar`, [IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone`): [bool](language.types.boolean.md)

Define um novo fuso horário para este calendário. O horário representado pelo
objeto é preservado em detrimento dos valores de campo.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`timezone`
:   O novo fuso horário a ser usado por este calendário. Pode ser especificado das
    seguintes maneiras:

    - **`null`**, neste caso o fuso horário padrão será usado, como especificado na
      configuração ini [date.timezone](datetime.configuration.md#ini.date.timezone) ou
      através da função [date\_default\_timezone\_set()](function.date-default-timezone-set.md) e como
      retornado por [date\_default\_timezone\_get()](function.date-default-timezone-get.md).
    - Um objeto [IntlTimeZone](class.intltimezone.md), que será usado diretamente.
    - Um objeto [DateTimeZone](class.datetimezone.md). Seu identificador será extraído
      e um objeto de fuso horário ICU será criado; o fuso horário será apoiado
      pelo banco de dados da ICU, não pelo do PHP.
    - Uma [string](language.types.string.md), que deve ser um identificador de fuso horário ICU válido.
      Consulte a função [IntlTimeZone::createTimeZoneIDEnumeration()](intltimezone.createtimezoneidenumeration.md). Deslocamentos
      puros como `"GMT+08:30"` também são aceitos.

### Valor Retornado

Retorna **`true`** em caso de sucesso e **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::setTimeZone()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'es_ES');

$cal = new IntlGregorianCalendar(2013, 5 /* maio */, 1, 12, 0, 0);

echo IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL), "\n";
echo "(instant {$cal->getTime()})\n";

$cal->setTimeZone(IntlTimeZone::getGMT());
echo IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL), "\n";
echo "(instant {$cal->getTime()})\n";

$cal->setTimeZone('GMT+03:33');
echo IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL), "\n";
echo "(instant {$cal->getTime()})\n";
```

O exemplo acima produzirá:

```
sábado, 1 de junio de 2013 12:00:00 Hora de verano de Europa occidental
(instant 1370084400000)
sábado, 1 de junio de 2013 11:00:00 GMT
(instant 1370084400000)
sábado, 1 de junio de 2013 14:33:00 GMT+03:33
(instant 1370084400000)
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
