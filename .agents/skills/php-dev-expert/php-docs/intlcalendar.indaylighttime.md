# Informa se o horário do objeto está no horário de verão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.indaylighttime.php

---

# IntlCalendar::inDaylightTime

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::inDaylightTime — Informa se o horário do objeto está no horário de verão

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::inDaylightTime**(): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_in\_daylight\_time**([IntlCalendar](class.intlcalendar.md) `$calendar`): [bool](language.types.boolean.md)

Informa se, para o instante representado por este objeto e para o fuso horário deste
objeto, o horário de verão estaria em vigor.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Retorna **`true`** se a data estiver no horário de verão, **`false`** caso contrário.

Em caso de falha, **`false`** também é retornado. Para detectar condições de erro, use [intl\_get\_error\_code()](function.intl-get-error-code.md) ou configure Intl para lançar [exceções](intl.configuration.md#ini.intl.use-exceptions).

### Examples

**Exemplo #1 **IntlCalendar::inDaylightTime()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_PT');

$cal = new IntlGregorianCalendar(2013, 6 /* julho */, 1, 4, 56, 31);
var_dump($cal->inDaylightTime()); // true
$cal->set(IntlCalendar::FIELD_MONTH, 11 /* dezembro */);
var_dump($cal->inDaylightTime()); // false

// Horário de verão transiciona de volta no dia 2013-10-27 às 0200 (volta 1 hora)
$cal = new IntlGregorianCalendar(2013, 9 /* October */, 27, 1, 30, 0);

var_dump($cal->inDaylightTime()); // false (padrão WALLTIME_LAST)

$cal->setRepeatedWallTimeOption(IntlCalendar::WALLTIME_FIRST);
$cal->set(IntlCalendar::FIELD_HOUR_OF_DAY, 1); // força recálculo do horário
var_dump($cal->inDaylightTime()); // true
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
