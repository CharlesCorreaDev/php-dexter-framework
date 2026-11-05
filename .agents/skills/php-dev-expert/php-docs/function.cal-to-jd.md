# Converte de um calendário suportado para o calendário de Contagem de Dias Julianos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cal-to-jd.php

---

# cal\_to\_jd

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

cal\_to\_jd — Converte de um calendário suportado para o calendário de Contagem de Dias Julianos

### Descrição

function **cal\_to\_jd**(  
    [int](language.types.integer.md) `$calendar`,  
    [int](language.types.integer.md) `$month`,  
    [int](language.types.integer.md) `$day`,  
    [int](language.types.integer.md) `$year`  
): [int](language.types.integer.md)

**cal\_to\_jd()** calcula a Contagem de Dias Julianos
para uma data no calendário especificado em `calendar`.
Os calendáris suportados em `calendar` são:
**`CAL_GREGORIAN`**,
**`CAL_JULIAN`**,
**`CAL_JEWISH`** e
**`CAL_FRENCH`**.

### Parâmetros

`calendar`
:   Calendário a ser convertido, uma das constantes
    **`CAL_GREGORIAN`**,
    **`CAL_JULIAN`**,
    **`CAL_JEWISH`** ou
    **`CAL_FRENCH`**.

`month`
:   O mês como um número, o intervalo válido depende
    de `calendar`.

`day`
:   O dia como um número, o intervalo válido depende
    de `calendar`.

`year`
:   O ano como um número, o intervalo válido depende
    de `calendar`.

### Valor Retornado

Um número de Dia Juliano.

### Veja também

- [cal\_from\_jd()](function.cal-from-jd.md) - Converte de uma Contagem de Dias Julianos para um calendário suportado
- [frenchtojd()](function.frenchtojd.md) - Converte uma data do calendário Republicano Francês para uma contagem de Dias Julianos
- [gregoriantojd()](function.gregoriantojd.md) - Converte uma data Gregoriana para a Contagem de Dias Julianos
- [jewishtojd()](function.jewishtojd.md) - Converte uma data do calendário Judaico para o calendário de Contagem de Dias Julianos
- [juliantojd()](function.juliantojd.md) - Converte uma data do calendário juliano para uma contagem de dias julianos
- [unixtojd()](function.unixtojd.md) - Converte um timestamp Unix para um dia Juliano

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
