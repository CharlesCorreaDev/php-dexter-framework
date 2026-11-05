# Obtém o fuso horário do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.gettimezone.php

---

# IntlCalendar::getTimeZone

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getTimeZone — Obtém o fuso horário do objeto

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getTimeZone**(): [IntlTimeZone](class.intltimezone.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_time\_zone**([IntlCalendar](class.intlcalendar.md) `$calendar`): [IntlTimeZone](class.intltimezone.md)|[false](language.types.singleton.md)

Retorna o objeto [IntlTimeZone](class.intltimezone.md) associado a este
calendário.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Um objeto [IntlTimeZone](class.intltimezone.md) correspondendo ao usado
internamente neste objeto. Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::getTimeZone()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');
ini_set('intl.default_locale', 'pt_BR');

$cal = IntlCalendar::createInstance();
print_r($cal->getTimeZone());

$cal->setTimeZone('UTC');
print_r($cal->getTimeZone());

$cal = IntlCalendar::fromDateTime('2012-01-01 00:00:00 GMT+03:33');
print_r($cal->getTimeZone());
```

O exemplo acima produzirá:

```
IntlTimeZone Object
(
    [valid] => 1
    [id] => Europe/Lisbon
    [rawOffset] => 0
    [currentOffset] => 0
)
IntlTimeZone Object
(
    [valid] => 1
    [id] => UTC
    [rawOffset] => 0
    [currentOffset] => 0
)
IntlTimeZone Object
(
    [valid] => 1
    [id] => GMT+03:33
    [rawOffset] => 12780000
    [currentOffset] => 12780000
)
```

### Veja também

- [IntlCalendar::setTimeZone()](intlcalendar.settimezone.md) - Define o fuso horário usado por este calendário
- [IntlCalendar::createInstance()](intlcalendar.createinstance.md) - Cria um novo IntlCalendar
- [IntlGregorianCalendar::\_\_construct()](intlgregoriancalendar.construct.md) - Cria um objeto de calendário gregoriano

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
