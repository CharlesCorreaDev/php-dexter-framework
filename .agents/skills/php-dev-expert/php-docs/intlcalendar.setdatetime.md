# Define campos de data e horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.setdatetime.php

---

# IntlCalendar::setDateTime

(PHP 8 >= 8.3.0)

IntlCalendar::setDateTime — Define campos de data e horário

### Descrição

public function **IntlCalendar::setDateTime**(  
    [int](language.types.integer.md) `$year`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$dayOfMonth`,  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$second` = **`null`**  
): [void](language.types.void.md)

Define campos de data e horário para os valores fornecidos.

### Parâmetros

`year`
:   O novo valor para **`IntlCalendar::FIELD_YEAR`**.

`month`
:   O novo valor para **`IntlCalendar::FIELD_MONTH`**.
    A sequência de meses é baseada em zero, isto é, janeiro é representado por 0,
    fevereiro por 1, …, dezembro é 11 e undecember (se o calendário
    tiver) é 12.

`dayOfMonth`
:   O novo valor para **`IntlCalendar::FIELD_DAY_OF_MONTH`**.

`hour`
:   O novo valor para **`IntlCalendar::FIELD_HOUR_OF_DAY`**.

`minute`
:   O novo valor para **`IntlCalendar::FIELD_MINUTE`**.

`second`
:   O novo valor para **`IntlCalendar::FIELD_SECOND`**.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **IntlCalendar::setDateTime()****

```
<?php
$intlCal = IntlCalendar::createInstance('UTC');

$intlCal->setDateTime(2012, 1 /* fevereiro */, 29, 23, 58);
?>
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
