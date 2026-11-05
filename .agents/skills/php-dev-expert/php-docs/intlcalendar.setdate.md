# Define campos de data

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.setdate.php

---

# IntlCalendar::setDate

(PHP 8 >= 8.3.0)

IntlCalendar::setDate — Define campos de data

### Descrição

public function **IntlCalendar::setDate**([int](language.types.integer.md) `$year`, [int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$dayOfMonth`): [void](language.types.void.md)

Define os campos de data para os valores fornecidos.

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

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **IntlCalendar::setDate()****

```
<?php
$intlCal = IntlCalendar::createInstance('UTC');

$intlCal->setDate(2012, 1 /* fevereiro */, 29);
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
