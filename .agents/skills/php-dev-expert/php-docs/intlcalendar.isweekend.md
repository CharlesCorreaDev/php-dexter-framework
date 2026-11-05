# Verifica se uma data e um horário estão no final de semana

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.isweekend.php

---

# IntlCalendar::isWeekend

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::isWeekend — Verifica se uma data e um horário estão no final de semana

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::isWeekend**([?](language.types.null.md)[float](language.types.float.md) `$timestamp` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_is\_weekend**([IntlCalendar](class.intlcalendar.md) `$calendar`, [?](language.types.null.md)[float](language.types.float.md) `$timestamp` = **`null`**): [bool](language.types.boolean.md)

Retorna se o horário atual do objeto ou o timestamp fornecido
ocorrem durante um final de semana no sistema de calendário deste objeto.

Esta função requer a ICU 4.4 ou posterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`timestamp`
:   Um timestamp opcional representando o número de milissegundos desde a
    época de referência, excluindo os segundos intercalares. Se for **`null`**, o horário atual do objeto é
    utilizado.

### Valor Retornado

Um [bool](language.types.boolean.md) indicando se o horário fornecido ou do objeto ocorre
em um final de semana.

Em caso de falha, **`false`** também é retornado. Para detectar condições de erro, use [intl\_get\_error\_code()](function.intl-get-error-code.md) ou configure Intl para lançar [exceções](intl.configuration.md#ini.intl.use-exceptions).

### Examples

**Exemplo #1 **IntlCalendar::isWeekend()****

```
<?php
ini_set('date.timezone', 'Europe/Lisbon');

$cal = new IntlGregorianCalendar(NULL, 'en_US');
$cal->set(2013, 6 /* julho */, 7); // um domingo

var_dump($cal->isWeekend()); // true
var_dump($cal->isWeekend(strtotime('2013-07-01 00:00:00'))); // false, segunda-feira

$cal = new IntlGregorianCalendar(NULL, 'ar_SA');
$cal->set(2013, 6 /* julho */, 7); // um domingo
var_dump($cal->isWeekend()); // false, domingo não está no final de semana neste calendário
```

### Veja também

- [IntlCalendar::getDayOfWeekType()](intlcalendar.getdayofweektype.md) - Informa se o dia é dia de semana, de final de semana ou de transição entre os dois
- [IntlCalendar::getWeekendTransition()](intlcalendar.getweekendtransition.md) - Obtém o horário do dia no qual o final de semana inicia ou termina

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
