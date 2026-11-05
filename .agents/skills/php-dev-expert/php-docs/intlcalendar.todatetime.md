# Converte um objeto IntlCalendar para um DateTime

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.todatetime.php

---

# IntlCalendar::toDateTime

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a2)

IntlCalendar::toDateTime — Converte um objeto IntlCalendar para um DateTime

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::toDateTime**(): [DateTime](class.datetime.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_to\_date\_time**([IntlCalendar](class.intlcalendar.md) `$calendar`): [DateTime](class.datetime.md)|[false](language.types.singleton.md)

Cria um objeto [DateTime](class.datetime.md) que representa o mesmo
instante (até a precisão de segundos, com um erro de arredondamento de menos de 1
segundo) e que tenha um fuso horário análogo a este objeto (a diferença sendo
que o fuso horário de [DateTime](class.datetime.md) será suportado pelo PHP
enquanto que o fuso horário de [IntlCalendar](class.intlcalendar.md) será suportado pela ICU).

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

### Valor Retornado

Um objeto [DateTime](class.datetime.md) com o mesmo fuso horário deste
objeto (embora usando o banco de dados do PHP no lugar do banco da ICU) e com o mesmo horário,
exceto pela precisão menos (precisão de segundos ao invés de milissegundos).
Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 **IntlCalendar::toDateTime()****

```
<?php
ini_set('date.timezone', 'UTC');
ini_set('intl.default_locale', 'pt_PT');

$cal = IntlCalendar::createInstance('Europe/Lisbon'); //horário atual

$dt = $cal->toDateTime();
print_r($dt);
```

O exemplo acima produzirá:

```
DateTime Object
(
    [date] => 2024-01-24 13:32:05.000000
    [timezone_type] => 3
    [timezone] => Europe/Lisbon
)
```

### Veja também

- [IntlCalendar::fromDateTime()](intlcalendar.fromdatetime.md) - Cria um IntlCalendar a partir de um objeto DateTime ou uma string
- [IntlCalendar::getTime()](intlcalendar.gettime.md) - Obtém o horário atualmente representado pelo objeto
- [IntlCalendar::createInstance()](intlcalendar.createinstance.md) - Cria um novo IntlCalendar
- [DateTime::\_\_construct()](datetime.construct.md) - Retorna um novo objeto DateTime

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
