# Converte do calendário "Julian Day Count" para o calendário Republicano Francês

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jdtofrench.php

---

# jdtofrench

(PHP 4, PHP 5, PHP 7, PHP 8)

jdtofrench — Converte do calendário "Julian Day Count" para o calendário Republicano Francês

### Descrição

function **jdtofrench**([int](language.types.integer.md) `$julian_day`): [string](language.types.string.md)

Converte do calendário de Contagem de Dias Julianos para o calendário Republicano Francês.

### Parâmetros

`julian_day`
:   Um número de dia juliano como inteiro

### Valor Retornado

A data republicana francesa como uma string no formato "mês/dia/ano"

### Veja também

- [frenchtojd()](function.frenchtojd.md) - Converte uma data do calendário Republicano Francês para uma contagem de Dias Julianos
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
