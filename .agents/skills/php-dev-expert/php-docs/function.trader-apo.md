# Oscilador de Preço Absoluto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-apo.php

---

# trader\_apo

(PECL trader >= 0.2.0)

trader\_apo — Oscilador de Preço Absoluto

### Descrição

function **trader\_apo**(  
    [array](language.types.array.md) `$real`,  
    [int](language.types.integer.md) `$fastPeriod` = ?,  
    [int](language.types.integer.md) `$slowPeriod` = ?,  
    [int](language.types.integer.md) `$mAType` = ?  
): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`fastPeriod`
:   Número de período para o MA rápido. Intervalo válido de 2 a 100000.

`slowPeriod`
:   Número de período para o MA lento. Intervalo válido de 2 a 100000.

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
