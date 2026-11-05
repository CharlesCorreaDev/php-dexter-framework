# Média móvel com período variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-mavp.php

---

# trader\_mavp

(PECL trader >= 0.2.0)

trader\_mavp — Média móvel com período variável

### Descrição

function **trader\_mavp**(  
    [array](language.types.array.md) `$real`,  
    [array](language.types.array.md) `$periods`,  
    [int](language.types.integer.md) `$minPeriod` = ?,  
    [int](language.types.integer.md) `$maxPeriod` = ?,  
    [int](language.types.integer.md) `$mAType` = ?  
): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`periods`
:   Array de valores reais.

`minPeriod`
:   Valor inferior ao mínimo que será modificado para período mínimo. Intervalo válido de 2 a 100000.

`maxPeriod`
:   Valor superior ao mínimo que será modificado para período máximo. Intervalo válido de 2 a 100000.

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
