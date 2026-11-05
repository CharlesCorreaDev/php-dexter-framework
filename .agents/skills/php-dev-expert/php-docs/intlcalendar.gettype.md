# Obtém o tipo de calendário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.gettype.php

---

# IntlCalendar::getType

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getType — Obtém o tipo de calendário

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getType**(): [string](language.types.string.md)

Estilo procedural

function **intlcal\_get\_type**([IntlCalendar](class.intlcalendar.md) `$calendar`): [string](language.types.string.md)

Uma string descrevendo o tipo deste calendário. Será um dos [valores válidos](intlcalendar.getkeywordvaluesforlocale.md) para
a palavra-chave `'calendar'`.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Uma [string](language.types.string.md) representando o tipo de calendário, como
`'gregorian'`, `'islamic'`, etc.

### Examples

**Exemplo #1 **IntlCalendar::getType()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_BR');

$cal = IntlCalendar::createInstance(NULL, '@calendar=ethiopic-amete-alem');
var_dump($cal->getType());

$cal = new IntlGregorianCalendar();
var_dump($cal->getType());
```

O exemplo acima produzirá:

```
string(19) "ethiopic-amete-alem"
string(9) "gregorian"
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
