# Construtor privado para não permitir instanciação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlcalendar.construct.php

---

# IntlCalendar::\_\_construct

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL >= 3.0.0a1)

IntlCalendar::\_\_construct — Construtor privado para não permitir instanciação

### Descrição

private function **IntlCalendar::\_\_construct**()

Um construtor privado para não permitir instanciação com o
operador [new](language.oop5.basic.md#language.oop5.basic.new).

Chame [IntlCalendar::createInstance()](intlcalendar.createinstance.md) em seu lugar.

### Parâmetros

Esta função não possui parâmetros.

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
