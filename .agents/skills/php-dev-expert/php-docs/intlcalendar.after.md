# Informa se o instante de tempo deste objeto é posterior ao instante do objeto passado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.after.php

---

# IntlCalendar::after

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::after — Informa se o instante de tempo deste objeto é posterior ao instante do objeto passado

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::after**([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_after**([IntlCalendar](class.intlcalendar.md) `$calendar`, [IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

Retorna se o instante de tempo deste objeto sucede o instante do argumento.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`other`
:   O calendário cujo instante será verificado em relação ao instante do objeto primário.

### Valor Retornado

Retorna **`true`** se o instante deste objeto for posterior ao do
argumento `calendar`. Retorna **`false`** caso contrário.

Em caso de falha, **`false`** também é retornado. Para detectar condições de erro, use [intl\_get\_error\_code()](function.intl-get-error-code.md) ou configure Intl para lançar [exceções](intl.configuration.md#ini.intl.use-exceptions).

### Examples

**Exemplo #1 **IntlCalendar::after()****

```
<?php
$cal1 = IntlCalendar::createInstance();
$cal2 = clone $cal1;

var_dump($cal1->after($cal2), // falso
        $cal2->after($cal1)); // falso

$cal1->roll(IntlCalendar::FIELD_MILLISECOND, true);

var_dump($cal1->after($cal2), // verdadeiro
        $cal2->after($cal1)); // falso
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
