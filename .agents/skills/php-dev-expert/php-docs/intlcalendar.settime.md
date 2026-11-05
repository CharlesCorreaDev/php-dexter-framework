# Define o horário do calendário em milissegundos desde a época de referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.settime.php

---

# IntlCalendar::setTime

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::setTime — Define o horário do calendário em milissegundos desde a época de referência

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::setTime**([float](language.types.float.md) `$timestamp`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_set\_time**([IntlCalendar](class.intlcalendar.md) `$calendar`, [float](language.types.float.md) `$timestamp`): [bool](language.types.boolean.md)

Define o instante representado por este objeto. O instante é representado por
um [float](language.types.float.md) cujo valor deve ser um número inteiro de
milissegundos desde a época de referência (1 Jan 1970 00:00:00.000 UTC), ignorando segundos
intercalares. Todos os valores de campo serão recalculados de acordo.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`timestamp`
:   Um instante representado pelo número de milissegundos desde
    a época de referência, ignorando segundos intercalares.

### Valor Retornado

Retorna **`true`** em caso de sucesso e **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::setTime()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'fr_FR');

$cal = new IntlGregorianCalendar(2013, 5 /* maio */, 1, 12, 0, 0);

echo IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL), "\n";

/* Em Lisboa, em 2013-10-27 at 0200, o relógio volta uma hora e
   o fuso horário passa de UTC+01 para UTC+00 */

$cal->setTime(strtotime('2013-10-27 00:30:00 UTC') * 1000.);

echo IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL), "\n";

$cal->setTime(strtotime('2013-10-27 01:30:00 UTC') * 1000.);

echo IntlDateFormatter::formatObject($cal, IntlDateFormatter::FULL), "\n";
```

O exemplo acima produzirá:

```
samedi 1 juin 2013 12:00:00 heure avancée d’Europe de l’Ouest
dimanche 27 octobre 2013 01:30:00 heure avancée d’Europe de l’Ouest
dimanche 27 octobre 2013 01:30:00 heure normale d’Europe de l’Ouest
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
