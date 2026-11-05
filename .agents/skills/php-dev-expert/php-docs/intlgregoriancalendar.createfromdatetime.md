# Cria uma instância de IntlGregorianCalendar a partir de data e horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlgregoriancalendar.createfromdatetime.php

---

# IntlGregorianCalendar::createFromDateTime

(PHP 8 >= 8.3.0)

IntlGregorianCalendar::createFromDateTime — Cria uma instância de IntlGregorianCalendar a partir de data e horário

### Descrição

public static function **IntlGregorianCalendar::createFromDateTime**(  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth`,  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$second` = **`null`**  
): static

Cria uma nova instância de [IntlGregorianCalendar](class.intlgregoriancalendar.md) a partir de data e horário.

### Parâmetros

`year`
:   O novo valor para o ano, **`IntlGregorianCalendar::FIELD_YEAR`**.

`month`
:   O novo valor para o mês, **`IntlGregorianCalendar::FIELD_MONTH`**.
    A sequência de meses é baseada em zero, isto é, janeiro é representado por 0,
    fevereiro por 1, …, dezembro é 11 e undecember (se o calendário o
    tiver) é 12.

`dayOfMonth`
:   O novo valor para o dia, **`IntlGregorianCalendar::FIELD_DAY_OF_MONTH`**.

`hour`
:   O novo valor para a hora, **`IntlGregorianCalendar::FIELD_HOUR_OF_DAY`**.

`minute`
:   O novo valor para o minuto, **`IntlGregorianCalendar::FIELD_MINUTE`**.

`second`
:   O novo valor para o segundo, **`IntlGregorianCalendar::FIELD_SECOND`**.

### Valor Retornado

Retorna uma nova instância de [IntlGregorianCalendar](class.intlgregoriancalendar.md).

### Examples

**Exemplo #1 Exemplo de **IntlGregorianCalendar::createFromDateTime()****

```
<?php

$intlCalendar = IntlGregorianCalendar::createFromDateTime(2023, 11, 23, 12, 00);
var_dump($intlCalendar);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(IntlGregorianCalendar)#1 (5) {
  ["valid"]=>
  bool(true)
  ["type"]=>
  string(9) "gregorian"
  ["timeZone"]=>
  array(4) {
    ["valid"]=>
    bool(true)
    ["id"]=>
    string(16) "Europe/Amsterdam"
    ["rawOffset"]=>
    int(3600000)
    ["currentOffset"]=>
    int(3600000)
  }
  ["locale"]=>
  string(11) "en_US_POSIX"
  ["fields"]=>
  array(23) {
    ["era"]=>
    int(1)
    ["year"]=>
    int(2023)
    ["month"]=>
    int(11)
    ["week of year"]=>
    int(51)
    ["week of month"]=>
    int(4)
    ["day of year"]=>
    int(357)
    ["day of month"]=>
    int(23)
    ["day of week"]=>
    int(7)
    ["day of week in month"]=>
    int(4)
    ["AM/PM"]=>
    int(1)
    ["hour"]=>
    int(0)
    ["hour of day"]=>
    int(12)
    ["minute"]=>
    int(0)
    ["second"]=>
    int(0)
    ["millisecond"]=>
    int(0)
    ["zone offset"]=>
    int(3600000)
    ["DST offset"]=>
    int(0)
    ["year for week of year"]=>
    int(2023)
    ["localized day of week"]=>
    int(7)
    ["extended year"]=>
    int(2023)
    ["julian day"]=>
    int(2460302)
    ["milliseconds in day"]=>
    int(43200000)
    ["is leap month"]=>
    int(0)
  }
}
```

### Veja também

- [IntlGregorianCalendar::createFromDate()](intlgregoriancalendar.createfromdate.md) - Cria uma nova instância de IntlGregorianCalendar a partir de uma data

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
