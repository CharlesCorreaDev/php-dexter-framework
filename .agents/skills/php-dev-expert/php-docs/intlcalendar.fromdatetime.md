# Cria um IntlCalendar a partir de um objeto DateTime ou uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.fromdatetime.php

---

# IntlCalendar::fromDateTime

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a2)

IntlCalendar::fromDateTime — Cria um IntlCalendar a partir de um objeto DateTime ou uma string

### Descrição

Estilo orientado a objetos

public static function **IntlCalendar::fromDateTime**([DateTime](class.datetime.md)|[string](language.types.string.md) `$datetime`, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlCalendar](class.intlcalendar.md)

Estilo procedural

function **intlcal\_from\_date\_time**([DateTime](class.datetime.md)|[string](language.types.string.md) `$datetime`, [?](language.types.null.md)[string](language.types.string.md) `$locale` = **`null`**): [?](language.types.null.md)[IntlCalendar](class.intlcalendar.md)

Cria um objeto [IntlCalendar](class.intlcalendar.md) a partir de um
objeto [DateTime](class.datetime.md) ou a partir de uma string da qual seja possível
criar um objeto [DateTime](class.datetime.md).

O novo calendário representará não somente o mesmo instante do
[DateTime](class.datetime.md) informado (sujeito a perda de precisão para datas
muito distantes no passado ou no futuro), mas também o mesmo fuso horário (sujeito à
ressalva de que diferentes bancos de dados de fuso horário serão usados, e portanto
os resultados podem ser diferentes).

### Parâmetros

`datetime`
:   Um objeto [DateTime](class.datetime.md) ou uma [string](language.types.string.md) que
    possa ser passada a [DateTime::\_\_construct()](datetime.construct.md).

### Valor Retornado

O objeto [IntlCalendar](class.intlcalendar.md) criado ou **`null`** em caso de
falha. Se uma [string](language.types.string.md) for informada, qualquer exceção que ocorrer
dentro do construtor [DateTime](class.datetime.md) será propagada.

### Examples

**Exemplo #1 **IntlCalendar::fromDateTime()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');

//o mesmo que IntlCalendar::fromDateTime(new DateTime(...))
$cal1 = IntlCalendar::fromDateTime('2013-02-28 00:01:02 Europe/Berlin', 'de_DE');

//Note que o fuso horário é Europe/Berlin, e não o padrão Europe/Lisbon
echo IntlDateFormatter::formatObject($cal1, 'yyyy MMMM d HH:mm:ss VVVV', 'de_DE'), "\n";
```

O exemplo acima produzirá:

```
2013 Februar 28 00:01:02 Deutschland Zeit
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
