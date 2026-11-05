# Frequência do temporizador em tiques por segundo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/hrtime-performancecounter.getfrequency.php

---

# HRTime\PerformanceCounter::getFrequency

(PECL hrtime >= 0.4.3)

HRTime\PerformanceCounter::getFrequency — Frequência do temporizador em tiques por segundo

### Descrição

public static function **HRTime\PerformanceCounter::getFrequency**(): [int](language.types.integer.md)

Retorna a frequência do temporizador em tiques por segundo. Este valor é constante após a
inicialização em quase todos os sistemas operacionais.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [int](language.types.integer.md) indicando a frequência do temporizador.

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
