# Convergência/Divergência da Média Móvel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-macd.php

---

# trader\_macd

(PECL trader >= 0.2.0)

trader\_macd — Convergência/Divergência da Média Móvel

### Descrição

function **trader\_macd**(  
    [array](language.types.array.md) `$real`,  
    [int](language.types.integer.md) `$fastPeriod` = ?,  
    [int](language.types.integer.md) `$slowPeriod` = ?,  
    [int](language.types.integer.md) `$signalPeriod` = ?  
): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`fastPeriod`
:   Número de período para o MA rápido. Intervalo válido de 2 a 100000.

`slowPeriod`
:   Número de período para o MA lento. Intervalo válido de 2 a 100000.

`signalPeriod`
:   Suavização da linha de sinal (número de período). Intervalo válido de 1 a 100000.

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
