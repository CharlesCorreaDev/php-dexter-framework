# Informa se o instante de tempo deste objeto é anterior ao instante do objeto passado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.before.php

---

# IntlCalendar::before

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::before — Informa se o instante de tempo deste objeto é anterior ao instante do objeto passado

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::before**([IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

Estilo procedural

function **intlcal\_before**([IntlCalendar](class.intlcalendar.md) `$calendar`, [IntlCalendar](class.intlcalendar.md) `$other`): [bool](language.types.boolean.md)

Retorna se o instante de tempo deste objeto precede o instante do argumento.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`other`
:   O calendário cujo instante será verificado em relação ao instante do objeto primário.

### Valor Retornado

Retorna **`true`** se o instante deste objeto for anterior ao do
argumento `calendar`. Retorna **`false`** caso contrário.

Em caso de falha, **`false`** também é retornado. Para detectar condições de erro, use [intl\_get\_error\_code()](function.intl-get-error-code.md) ou configure Intl para lançar [exceções](intl.configuration.md#ini.intl.use-exceptions).

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
