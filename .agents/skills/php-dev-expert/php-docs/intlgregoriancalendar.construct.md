# Cria um objeto de calendário gregoriano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlgregoriancalendar.construct.php

---

# IntlGregorianCalendar::\_\_construct

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

IntlGregorianCalendar::\_\_construct — Cria um objeto de calendário gregoriano

### Descrição

public function **IntlGregorianCalendar::\_\_construct**([IntlTimeZone](class.intltimezone.md) `$tz` = ?, [string](language.types.string.md) `$locale` = ?)

public function **IntlGregorianCalendar::\_\_construct**([int](language.types.integer.md) `$timeZoneOrYear`, [int](language.types.integer.md) `$localeOrMonth`, [int](language.types.integer.md) `$dayOfMonth`)

public function **IntlGregorianCalendar::\_\_construct**(  
    [int](language.types.integer.md) `$timeZoneOrYear`,  
    [int](language.types.integer.md) `$localeOrMonth`,  
    [int](language.types.integer.md) `$dayOfMonth`,  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [int](language.types.integer.md) `$second` = ?  
)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`tz`

`locale`

`timeZoneOrYear`

`localeOrMonth`

`dayOfMonth`

`hour`

`minute`

`second`

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Este método foi descontinuado em favor dos métodos [IntlGregorianCalendar::createFromDate()](intlgregoriancalendar.createfromdate.md) e [IntlGregorianCalendar::createFromDateTime()](intlgregoriancalendar.createfromdatetime.md). |

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
