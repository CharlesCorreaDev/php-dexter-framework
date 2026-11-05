# Retorna informação sobre um calendário específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cal-info.php

---

# cal\_info

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

cal\_info — Retorna informação sobre um calendário específico

### Descrição

function **cal\_info**([int](language.types.integer.md) `$calendar` = -1): [array](language.types.array.md)

**cal\_info()** retorna informação sobre o
calendário especificado em `calendar`.

Informação sobre calendário é retornada como um array contendo os
elementos `calname`, `calsymbol`,
`month`, `abbrevmonth` e
`maxdaysinmonth`. Os nomes dos diferentes calendários
que podem ser usados no parâmetro `calendar` são os seguintes:

- 0 ou **`CAL_GREGORIAN`** - Calendário Gregoriano
- 1 ou **`CAL_JULIAN`** - Calendário Juliano
- 2 ou **`CAL_JEWISH`** - Calendário Judeu
- 3 ou **`CAL_FRENCH`** - Calendário da Revolução Francesa

Se o parâmetro `calendar` não for especificado, informação sobre todos
os calendários suportados é retornada como um array.

### Parâmetros

`calendar`
:   Calendário para o qual será retornada a informação. Se nenhum calendário for especificado, informação sobre todos
    os calendários suportados é retornada.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **cal\_info()****

```
<?php
$info = cal_info(0);
print_r($info);
?>
```

O exemplo acima produzirá:

```
Array
(
    [months] => Array
        (
            [1] => January
            [2] => February
            [3] => March
            [4] => April
            [5] => May
            [6] => June
            [7] => July
            [8] => August
            [9] => September
            [10] => October
            [11] => November
            [12] => December
        )

    [abbrevmonths] => Array
        (
            [1] => Jan
            [2] => Feb
            [3] => Mar
            [4] => Apr
            [5] => May
            [6] => Jun
            [7] => Jul
            [8] => Aug
            [9] => Sep
            [10] => Oct
            [11] => Nov
            [12] => Dec
        )

    [maxdaysinmonth] => 31
    [calname] => Gregorian
    [calsymbol] => CAL_GREGORIAN
)
```

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
