# Oscilador Final

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-ultosc.php

---

# trader\_ultosc

(PECL trader >= 0.2.0)

trader\_ultosc — Oscilador Final

### Descrição

function **trader\_ultosc**(  
    [array](language.types.array.md) `$high`,  
    [array](language.types.array.md) `$low`,  
    [array](language.types.array.md) `$close`,  
    [int](language.types.integer.md) `$timePeriod1` = ?,  
    [int](language.types.integer.md) `$timePeriod2` = ?,  
    [int](language.types.integer.md) `$timePeriod3` = ?  
): [array](language.types.array.md)

### Parâmetros

`high`
:   Preço alto, array de valores reais.

`low`
:   Preço baixo, array de valores reais.

`close`
:   Preço de fechamento, array de valores reais.

`timePeriod1`
:   Number of bars for 1st period. Valid range from 1 to 100000.

`timePeriod2`
:   Number of bars for 2nd period. Valid range from 1 to 100000.

`timePeriod3`
:   Number of bars for 3rd period. Valid range from 1 to 100000.

### Valor Retornado

Retorna um array com os dados calculados ou false em caso de falha.

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
