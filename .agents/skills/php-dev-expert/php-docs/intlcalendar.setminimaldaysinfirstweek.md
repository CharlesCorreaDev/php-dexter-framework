# Define o número mínimo de dias que a primeira semana do ano ou do mês pode ter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.setminimaldaysinfirstweek.php

---

# IntlCalendar::setMinimalDaysInFirstWeek

(PHP 5 >= 5.5.1, PHP 7, PHP 8)

IntlCalendar::setMinimalDaysInFirstWeek — Define o número mínimo de dias que a primeira semana do ano ou do mês pode ter

### Descrição

Estilo orientado a objetos

public function **IntlCalendar::setMinimalDaysInFirstWeek**([int](language.types.integer.md) `$days`): [true](language.types.singleton.md)

Estilo procedural

function **intlcal\_set\_minimal\_days\_in\_first\_week**([IntlCalendar](class.intlcalendar.md) `$calendar`, [int](language.types.integer.md) `$days`): [true](language.types.singleton.md)

Define o menor número de dias que a primeira semana do ano ou do mês precisa
ter no novo ano ou no novo mês. Por exemplo, no calendário gregoriano, se
este valor for 1, então a primeira semana do ano incluirá necessariamente
o dia 1º de janeiro, enquanto que se este valor for 7, então a semana com o dia 1º de janeiro
será a primeira semana do ano somente se o dia da semana para 1º de janeiro
corresponder ao dia da semana retornado por
[IntlCalendar::getFirstDayOfWeek()](intlcalendar.getfirstdayofweek.md); caso contrário será
a última semana do ano anterior.

### Parâmetros

`calendar`
:   Uma instância de [IntlCalendar](class.intlcalendar.md).

`days`
:   O número mínimo de dias a ser definido.

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

[ValueError](class.valueerror.md) se `days` estiver fora do intervalo
(menos que `1` ou mais que `7`).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Um [ValueError](class.valueerror.md) agora é lançado em caso de entrada inválida. Anteriormente, **`false`** era retornado. |

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
