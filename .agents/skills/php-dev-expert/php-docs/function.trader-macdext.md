# Convergência/Divergência da Média Móvel com tipo MM controlável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-macdext.php

---

# trader\_macdext

(PECL trader >= 0.2.0)

trader\_macdext — Convergência/Divergência da Média Móvel com tipo MM controlável

### Descrição

function **trader\_macdext**(  
    [array](language.types.array.md) `$real`,  
    [int](language.types.integer.md) `$fastPeriod` = ?,  
    [int](language.types.integer.md) `$fastMAType` = ?,  
    [int](language.types.integer.md) `$slowPeriod` = ?,  
    [int](language.types.integer.md) `$slowMAType` = ?,  
    [int](language.types.integer.md) `$signalPeriod` = ?,  
    [int](language.types.integer.md) `$signalMAType` = ?  
): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`fastPeriod`
:   Número de período para o MA rápido. Intervalo válido de 2 a 100000.

`fastMAType`
:   Tipo de Média Móvel para o MA rápido. As constantes [TRADER\_MA\_TYPE\_\*](trader.constants.md) devem ser usadas.

`slowPeriod`
:   Número de período para o MA lento. Intervalo válido de 2 a 100000.

`slowMAType`
:   Tipo de Média Móvel para o MA lento. As constantes [TRADER\_MA\_TYPE\_\*](trader.constants.md) devem ser usadas.

`signalPeriod`
:   Suavização da linha de sinal (número de período). Intervalo válido de 1 a 100000.

`signalMAType`
:   Tipo de Média Móvel para a linha de sinal. As constantes [TRADER\_MA\_TYPE\_\*](trader.constants.md) devem ser usadas.

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
