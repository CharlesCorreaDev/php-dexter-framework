# Verifica se a interpretação de data/horário está no modo leniente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.islenient.php

---

# IntlCalendar::isLenient

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::isLenient — Verifica se a interpretação de data/horário está no modo leniente

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::isLenient**(): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_is\_lenient**([IntlCalendar](class.intlcalendar.md) `$calendar`): [bool](language.types.boolean.md)

Retorna se a interpretação atual de data/horário está no modo leniente (o
padrão). Se for este o caso, alguns valores que estejam fora dos limites para seus campos serão
aceitos ao invés de disparar um erro.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Um [bool](language.types.boolean.md) representando se o calendário está definido para modo leniente.

### Examples

**Exemplo #1 **IntlCalendar::isLenient()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_PT');
ini_set('intl.use_exceptions', '1');

$cal = new IntlGregorianCalendar(2013, 6 /* julho */, 1);
var_dump(IntlDateFormatter::formatObject($cal), // 01/07/2013, 00:00:00
$cal->isLenient()); // true

$cal->set(IntlCalendar::FIELD_DAY_OF_MONTH, 33);
var_dump(IntlDateFormatter::formatObject($cal)); // 02/08/2013, 00:00:00

$cal->setLenient(false);
var_dump($cal->isLenient()); // false
$cal->set(IntlCalendar::FIELD_DAY_OF_MONTH, 33);
var_dump(IntlDateFormatter::formatObject($cal)); // erro
```

O exemplo acima produzirá:

```
string(20) "01/07/2013, 00:00:00"
bool(true)
string(20) "02/08/2013, 00:00:00"
bool(false)

Fatal error: Uncaught IntlException: datefmt_format_object: error obtaining instant from IntlCalendar in /home/foobar/example.php:16
Stack trace:
#0 /home/foobar/example.php(16): IntlDateFormatter::formatObject()
#1 {main}
  thrown in /home/foobar/example.php on line 16
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
