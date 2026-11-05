# Converte de uma Contagem de Dias Julianos para um calendário suportado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cal-from-jd.php

---

# cal\_from\_jd

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

cal\_from\_jd — Converte de uma Contagem de Dias Julianos para um calendário suportado

### Descrição

function **cal\_from\_jd**([int](language.types.integer.md) `$julian_day`, [int](language.types.integer.md) `$calendar`): [array](language.types.array.md)

**cal\_from\_jd()** converte o dia Juliano fornecido em
`julian_day` para uma data no calendário especificado em
`calendar`. Valores suportados para
`calendar` são
**`CAL_GREGORIAN`**,
**`CAL_JULIAN`**,
**`CAL_JEWISH`** e
**`CAL_FRENCH`**.

### Parâmetros

`julian_day`
:   Dia Juliano como um número inteiro

`calendar`
:   Calendário para o qual será feita a conversão.

### Valor Retornado

Retorna um array contendo informações do calendário como mês, dia, ano,
dia da semana (`dow`), nomes abreviados e completos de meses e dias da semana e a
data em string no formato "mês/dia/ano".
O dia da semana pode variar de `0` (domingo) a
`6` (sábado).

### Examples

**Exemplo #1 Exemplo de **cal\_from\_jd()****

```
<?php
$today = unixtojd(mktime(0, 0, 0, 8, 16, 2003));
print_r(cal_from_jd($today, CAL_GREGORIAN));
?>
```

O exemplo acima produzirá:

```
Array
(
    [date] => 8/16/2003
    [month] => 8
    [day] => 16
    [year] => 2003
    [dow] => 6
    [abbrevdayname] => Sat
    [dayname] => Saturday
    [abbrevmonth] => Aug
    [monthname] => August
)
```

### Veja também

- [cal\_to\_jd()](function.cal-to-jd.md) - Converte de um calendário suportado para o calendário de Contagem de Dias Julianos
- [jdtofrench()](function.jdtofrench.md) - Converte do calendário "Julian Day Count" para o calendário Republicano Francês
- [jdtogregorian()](function.jdtogregorian.md) - Converte uma data no formato "Julian Day Count" para o formato Gregoriano
- [jdtojewish()](function.jdtojewish.md) - Converte uma contagem de dias Julianos para uma data do calendário Judeu
- [jdtojulian()](function.jdtojulian.md) - Converte uma Contagem de Dias Julianos para uma data do calendário juliano
- [jdtounix()](function.jdtounix.md) - Converte Dia Juliano para timestamp Unix

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
