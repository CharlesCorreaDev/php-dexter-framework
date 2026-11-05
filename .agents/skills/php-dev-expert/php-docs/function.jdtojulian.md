# Converte uma Contagem de Dias Julianos para uma data do calendário juliano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jdtojulian.php

---

# jdtojulian

(PHP 4, PHP 5, PHP 7, PHP 8)

jdtojulian — Converte uma Contagem de Dias Julianos para uma data do calendário juliano

### Descrição

function **jdtojulian**([int](language.types.integer.md) `$julian_day`): [string](language.types.string.md)

Converte uma Contagem de Dias Julianos para uma "string" contendo a data
do calendário juliano no formato "mês/dia/ano".

### Parâmetros

`julian_day`
:   O número de dia juliano como um inteiro

### Valor Retornado

A data juliana como uma string no formato "mês/dia/ano"

### Veja também

- [juliantojd()](function.juliantojd.md) - Converte uma data do calendário juliano para uma contagem de dias julianos
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
