# A classe HRTime\PerformanceCounter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.hrtime-performancecounter.php

---

# A classe HRTime\PerformanceCounter

(PECL hrtime >= 0.4.3)

## Introdução

## Resumo da classe

class **HRTime\PerformanceCounter**
{

/\* Métodos \*/

public static function [getFrequency](hrtime-performancecounter.getfrequency.md)(): [int](language.types.integer.md)

public static function [getTicks](hrtime-performancecounter.getticks.md)(): [int](language.types.integer.md)

public static function [getTicksSince](hrtime-performancecounter.gettickssince.md)([int](language.types.integer.md) `$start`): [int](language.types.integer.md)

}

## Índice

- [HRTime\PerformanceCounter::getFrequency](hrtime-performancecounter.getfrequency.md) — Frequência do temporizador em tiques por segundo
- [HRTime\PerformanceCounter::getTicks](hrtime-performancecounter.getticks.md) — Tiques atuais do sistema
- [HRTime\PerformanceCounter::getTicksSince](hrtime-performancecounter.gettickssince.md) — Tiques decorridos desde um valor informado

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
