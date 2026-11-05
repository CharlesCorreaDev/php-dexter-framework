# Média móvel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-ma.php

---

# trader\_ma

(PECL trader >= 0.2.0)

trader\_ma — Média móvel

### Descrição

function **trader\_ma**([array](language.types.array.md) `$real`, [int](language.types.integer.md) `$timePeriod` = ?, [int](language.types.integer.md) `$mAType` = ?): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`timePeriod`
:   Número de período. Intervalo válido de 2 a 100000.

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
