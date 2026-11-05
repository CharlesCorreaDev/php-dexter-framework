# Estocástico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-stoch.php

---

# trader\_stoch

(PECL trader >= 0.2.0)

trader\_stoch — Estocástico

### Descrição

function **trader\_stoch**(  
    [array](language.types.array.md) `$high`,  
    [array](language.types.array.md) `$low`,  
    [array](language.types.array.md) `$close`,  
    [int](language.types.integer.md) `$fastK_Period` = ?,  
    [int](language.types.integer.md) `$slowK_Period` = ?,  
    [int](language.types.integer.md) `$slowK_MAType` = ?,  
    [int](language.types.integer.md) `$slowD_Period` = ?,  
    [int](language.types.integer.md) `$slowD_MAType` = ?  
): [array](language.types.array.md)

### Parâmetros

`high`
:   Preço alto, array de valores reais.

`low`
:   Preço baixo, array de valores reais.

`close`
:   Preço de fechamento, array de valores reais.

`fastK_Period`
:   Período de tempo para a construção da linha Fast-K. Intervalo válido de 1 a 100000.

`slowK_Period`
:   Suavização na construção da linha Slow-K. Intervalo válido de 1 a 100000, geralmente 3.

`slowK_MAType`
:   Tipo de Média Móvel para o Slow-K. As constantes [TRADER\_MA\_TYPE\_\*](trader.constants.md) devem ser usadas.

`slowD_Period`
:   Suavização na construção da linha Slow-D. Intervalo válido de 1 a 100000.

`slowD_MAType`
:   Tipo de Média Móvel para o Slow-D. As constantes [TRADER\_MA\_TYPE\_\*](trader.constants.md) devem ser usadas.

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
