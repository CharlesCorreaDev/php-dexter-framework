# Estocástico Rápido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-stochf.php

---

# trader\_stochf

(PECL trader >= 0.2.0)

trader\_stochf — Estocástico Rápido

### Descrição

function **trader\_stochf**(  
    [array](language.types.array.md) `$high`,  
    [array](language.types.array.md) `$low`,  
    [array](language.types.array.md) `$close`,  
    [int](language.types.integer.md) `$fastK_Period` = ?,  
    [int](language.types.integer.md) `$fastD_Period` = ?,  
    [int](language.types.integer.md) `$fastD_MAType` = ?  
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

`fastD_Period`
:   Suavização na construção da linha Fast-D. Intervalo válido de 1 a 100000, geralmente 3.

`fastD_MAType`
:   Tipo de Média Móvel para o Fast-D. As constantes [TRADER\_MA\_TYPE\_\*](trader.constants.md) devem ser usadas.

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
