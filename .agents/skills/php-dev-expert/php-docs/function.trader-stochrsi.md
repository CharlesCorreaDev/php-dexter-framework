# Índice de Força Relativa Estocástica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-stochrsi.php

---

# trader\_stochrsi

(PECL trader >= 0.2.0)

trader\_stochrsi — Índice de Força Relativa Estocástica

### Descrição

function **trader\_stochrsi**(  
    [array](language.types.array.md) `$real`,  
    [int](language.types.integer.md) `$timePeriod` = ?,  
    [int](language.types.integer.md) `$fastK_Period` = ?,  
    [int](language.types.integer.md) `$fastD_Period` = ?,  
    [int](language.types.integer.md) `$fastD_MAType` = ?  
): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`timePeriod`
:   Número de período. Intervalo válido de 2 a 100000.

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
