# Bandas de Bollinger

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-bbands.php

---

# trader\_bbands

(PECL trader >= 0.2.0)

trader\_bbands — Bandas de Bollinger

### Descrição

function **trader\_bbands**(  
    [array](language.types.array.md) `$real`,  
    [int](language.types.integer.md) `$timePeriod` = ?,  
    [float](language.types.float.md) `$nbDevUp` = ?,  
    [float](language.types.float.md) `$nbDevDn` = ?,  
    [int](language.types.integer.md) `$mAType` = ?  
): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`timePeriod`
:   Número de período. Intervalo válido de 2 a 100000.

`nbDevUp`
:   Multiplicador de desvio para banda superior. Intervalo válido de [TRADER\_REAL\_MIN](trader.constants.md#constant.trader-real-min) a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`nbDevDn`
:   Multiplicador de desvio para a banda inferior. Intervalo válido de [TRADER\_REAL\_MIN](trader.constants.md#constant.trader-real-min) a [TRADER\_REAL\_MAX](trader.constants.md#constant.trader-real-max).

`mAType`
:   Tipo de Média Móvel. As constantes [TRADER\_MA\_TYPE\_\*](trader.constants.md) devem ser usadas.

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
