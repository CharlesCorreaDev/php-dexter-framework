# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/calendar.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`CAL_EASTER_DEFAULT`** ([int](language.types.integer.md))
:   Para a função [easter\_days()](function.easter-days.md): calcula a data da Páscoa para anos anteriores a
    1753 de acordo com o calendário Juliano, e para anos posteriores de acordo com o
    calendrário Gregoriano.

**`CAL_EASTER_ROMAN`** ([int](language.types.integer.md))
:   Para a função [easter\_days()](function.easter-days.md): calcula a data da Páscoa para anos anteriores a
    1583 de acordo com o calendário Juliano, e para anos posteriores de acordo com o
    calendrário Gregoriano.

**`CAL_EASTER_ALWAYS_GREGORIAN`** ([int](language.types.integer.md))
:   Para a função [easter\_days()](function.easter-days.md): calcula a data da Páscoa de acordo com o
    calendário Gregoriano proléptico.

**`CAL_EASTER_ALWAYS_JULIAN`** ([int](language.types.integer.md))
:   Para a função [easter\_days()](function.easter-days.md): calcula a data da Páscoa de cordo com o
    calendário Juliano.

**`CAL_GREGORIAN`** ([int](language.types.integer.md))
:   Para as funções [cal\_days\_in\_month()](function.cal-days-in-month.md),
    [cal\_from\_jd()](function.cal-from-jd.md), [cal\_info()](function.cal-info.md) e
    [cal\_to\_jd()](function.cal-to-jd.md): usam o calendário Gregoriano proléptico.

**`CAL_JULIAN`** ([int](language.types.integer.md))
:   Para as funções [cal\_days\_in\_month()](function.cal-days-in-month.md),
    [cal\_from\_jd()](function.cal-from-jd.md), [cal\_info()](function.cal-info.md) e
    [cal\_to\_jd()](function.cal-to-jd.md): usam o calendário Juliano.

**`CAL_JEWISH`** ([int](language.types.integer.md))
:   Para as funções [cal\_days\_in\_month()](function.cal-days-in-month.md),
    [cal\_from\_jd()](function.cal-from-jd.md), [cal\_info()](function.cal-info.md) e
    [cal\_to\_jd()](function.cal-to-jd.md): usam o calendário Judeu.

**`CAL_FRENCH`** ([int](language.types.integer.md))
:   Para as funções [cal\_days\_in\_month()](function.cal-days-in-month.md),
    [cal\_from\_jd()](function.cal-from-jd.md), [cal\_info()](function.cal-info.md) e
    [cal\_to\_jd()](function.cal-to-jd.md): usam o calendário Republicano Francês.

**`CAL_NUM_CALS`** ([int](language.types.integer.md))
:   O número de calendários disponíveis.

**`CAL_JEWISH_ADD_ALAFIM_GERESH`** ([int](language.types.integer.md))
:   Para a função [jdtojewish()](function.jdtojewish.md): adiciona um símbolo de geresh (que lembra
    um apóstrofo) como separador de milhares ao número do ano.

**`CAL_JEWISH_ADD_ALAFIM`** ([int](language.types.integer.md))
:   Para a função [jdtojewish()](function.jdtojewish.md): adiciona a palavra alafim como separadora
    de milhares ao número do ano.

**`CAL_JEWISH_ADD_GERESHAYIM`** ([int](language.types.integer.md))
:   Para a função [jdtojewish()](function.jdtojewish.md): adiciona um símbolo gershayim (que
    lembra aspas duplas) antes da letra final dos número de dia e ano.

**`CAL_DOW_DAYNO`** ([int](language.types.integer.md))
:   Para a função [jddayofweek()](function.jddayofweek.md): o dia da semana como
    [int](language.types.integer.md), onde `0` representa domingo e
    `6` representa sábado.

**`CAL_DOW_SHORT`** ([int](language.types.integer.md))
:   Para a função [jddayofweek()](function.jddayofweek.md): o nome em inglês abreviado do
    dia da semana.

**`CAL_DOW_LONG`** ([int](language.types.integer.md))
:   Para a função [jddayofweek()](function.jddayofweek.md): o nome em inglês do dia da
    semana.

**`CAL_MONTH_GREGORIAN_SHORT`** ([int](language.types.integer.md))
:   Para a função [jdmonthname()](function.jdmonthname.md): o nome do mês Gregoriano abreviado.

**`CAL_MONTH_GREGORIAN_LONG`** ([int](language.types.integer.md))
:   Para a função [jdmonthname()](function.jdmonthname.md): o nome do mês Gregoriano.

**`CAL_MONTH_JULIAN_SHORT`** ([int](language.types.integer.md))
:   Para a função [jdmonthname()](function.jdmonthname.md): o nome do mês Juliano abreviado.

**`CAL_MONTH_JULIAN_LONG`** ([int](language.types.integer.md))
:   Para a função [jdmonthname()](function.jdmonthname.md): o nome do mês Juliano.

**`CAL_MONTH_JEWISH`** ([int](language.types.integer.md))
:   Para a função [jdmonthname()](function.jdmonthname.md): o nome do mês Judeu.

**`CAL_MONTH_FRENCH`** ([int](language.types.integer.md))
:   Para a função [jdmonthname()](function.jdmonthname.md): o nome do mês Republicano Francês.

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
