# Oscilador A/D Chaikin

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-adosc.php

---

# trader\_adosc

(PECL trader >= 0.2.0)

trader\_adosc — Oscilador A/D Chaikin

### Descrição

function **trader\_adosc**(  
    [array](language.types.array.md) `$high`,  
    [array](language.types.array.md) `$low`,  
    [array](language.types.array.md) `$close`,  
    [array](language.types.array.md) `$volume`,  
    [int](language.types.integer.md) `$fastPeriod` = ?,  
    [int](language.types.integer.md) `$slowPeriod` = ?  
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

`fastPeriod`
:   Número de período para o MA rápido. Intervalo válido de 2 a 100000.

`slowPeriod`
:   Número de período para o MA lento. Intervalo válido de 2 a 100000.

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
