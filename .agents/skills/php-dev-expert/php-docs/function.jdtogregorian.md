# Converte uma data no formato "Julian Day Count" para o formato Gregoriano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jdtogregorian.php

---

# jdtogregorian

(PHP 4, PHP 5, PHP 7, PHP 8)

jdtogregorian — Converte uma data no formato "Julian Day Count" para o formato Gregoriano

### Descrição

function **jdtogregorian**([int](language.types.integer.md) `$julian_day`): [string](language.types.string.md)

Converte da Contagem de Dias Julianos para uma "string" contendo a data
gregoriana no formato "mês/dia/ano".

### Parâmetros

`julian_day`
:   O número de um dia juliano como um inteiro

### Valor Retornado

A data gregoriana como uma string no formato "mês/dia/ano"

### Veja também

- [gregoriantojd()](function.gregoriantojd.md) - Converte uma data Gregoriana para a Contagem de Dias Julianos
- [cal\_from\_jd()](function.cal-from-jd.md) - Converte de uma Contagem de Dias Julianos para um calendário suportado

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
