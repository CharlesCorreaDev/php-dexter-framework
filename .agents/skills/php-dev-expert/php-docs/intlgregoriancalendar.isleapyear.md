# Determina se o ano é bissexto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlgregoriancalendar.isleapyear.php

---

# IntlGregorianCalendar::isLeapYear

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlGregorianCalendar::isLeapYear — Determina se o ano é bissexto

### Descrição

Estilo orientado a objetos

public function **IntlGregorianCalendar::isLeapYear**([int](language.types.integer.md) `$year`): [bool](language.types.boolean.md)

Estilo procedural

function **intlgregcal\_is\_leap\_year**([IntlGregorianCalendar](class.intlgregoriancalendar.md) `$calendar`, [int](language.types.integer.md) `$year`): [bool](language.types.boolean.md)

Determina se o `year` fornecido é um ano bissexto
no calendário gregoriano.

### Parâmetros

`calendar`
:   Uma instância de [IntlGregorianCalendar](class.intlgregoriancalendar.md).

`year`
:   O ano a ser verificado.

### Valor Retornado

Retorna **`true`** para anos bissextos, **`false`** caso contrário e em caso de falha.

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
