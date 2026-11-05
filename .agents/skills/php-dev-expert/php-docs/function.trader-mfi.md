# Índice de Fluxo de Dinheiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-mfi.php

---

# trader\_mfi

(PECL trader >= 0.2.0)

trader\_mfi — Índice de Fluxo de Dinheiro

### Descrição

function **trader\_mfi**(  
    [array](language.types.array.md) `$high`,  
    [array](language.types.array.md) `$low`,  
    [array](language.types.array.md) `$close`,  
    [array](language.types.array.md) `$volume`,  
    [int](language.types.integer.md) `$timePeriod` = ?  
): [array](language.types.array.md)

### Parâmetros

`high`
:   Preço alto, array de valores reais.

`low`
:   Preço baixo, array de valores reais.

`close`
:   Preço de fechamento, array de valores reais.

`volume`
:   Volume negociado, array de valores reais.

`timePeriod`
:   Número de período. Intervalo válido de 2 a 100000.

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
