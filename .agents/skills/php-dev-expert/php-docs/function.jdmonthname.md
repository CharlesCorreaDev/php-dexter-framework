# Retorna o nome de um mês

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.jdmonthname.php

---

# jdmonthname

(PHP 4, PHP 5, PHP 7, PHP 8)

jdmonthname — Retorna o nome de um mês

### Descrição

function **jdmonthname**([int](language.types.integer.md) `$julian_day`, [int](language.types.integer.md) `$mode`): [string](language.types.string.md)

Retorna uma "string" contendo o nome do mês.
O parâmetro `mode` diz à função
qual calendário será convertido para o formato de Contagem de Dias Julianos
e o tipo do nome do mês.

**Calendário (modos)**

| Modo | Significado | Valores |
| --- | --- | --- |
| **`CAL_MONTH_GREGORIAN_SHORT`** | Gregoriano - abreviado | Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec |
| **`CAL_MONTH_GREGORIAN_LONG`** | Gregoriano | January, February, March, April, May, June, July, August, September, October, November, December |
| **`CAL_MONTH_JULIAN_SHORT`** | Juliano - abreviado | Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec |
| **`CAL_MONTH_JULIAN_LONG`** | Juliano | January, February, March, April, May, June, July, August, September, October, November, December |
| **`CAL_MONTH_JEWISH`** | Judeu | Tishri, Heshvan, Kislev, Tevet, Shevat, Adar, Adar I, Adar II, Nisan, Iyyar, Sivan, Tammuz, Av, Elul |
| **`CAL_MONTH_FRENCH`** | Republicano Francês | Vendemiaire, Brumaire, Frimaire, Nivose, Pluviose, Ventose, Germinal, Floreal, Prairial, Messidor, Thermidor, Fructidor, Extra |

### Parâmetros

`julian_day`
:   O dia juliano.

`mode`
:   O modo do calendário (veja tabela acima).

### Valor Retornado

O nome do mês para o dia juliano e `mode`.

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
