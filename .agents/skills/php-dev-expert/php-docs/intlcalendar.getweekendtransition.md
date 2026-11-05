# Obtém o horário do dia no qual o final de semana inicia ou termina

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.getweekendtransition.php

---

# IntlCalendar::getWeekendTransition

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::getWeekendTransition — Obtém o horário do dia no qual o final de semana inicia ou termina

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::getWeekendTransition**([int](language.types.integer.md) `$dayOfWeek`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Estilo procedural

function **intlcal\_get\_weekend\_transition**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$dayOfWeek`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o número de milissegundos após a meia-noite quando o final de semana
inicia ou termina.

É aplicável somente para dias da semana para os quais
[IntlCalendar::getDayOfWeekType()](intlcalendar.getdayofweektype.md) retorna
**`IntlCalendar::DOW_TYPE_WEEKEND_OFFSET`** ou
**`IntlCalendar::DOW_TYPE_WEEKEND_CEASE`**. Chamar estas funções
para outros dias da semana é uma condição de erro.

Esta função requer a ICU 4.4 ou posterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`dayOfWeek`
:   Uma das constantes **`IntlCalendar::DOW_SUNDAY`**,
    **`IntlCalendar::DOW_MONDAY`**, …,
    **`IntlCalendar::DOW_SATURDAY`**.

### Valor Retornado

O número de milissegundos no dia quando o final de semana inicia ou
termina ou **`false`** em caso de falha.

### Examples

Vaja exemplo em [IntlCalendar::getDayOfWeekType()](intlcalendar.getdayofweektype.md).

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
