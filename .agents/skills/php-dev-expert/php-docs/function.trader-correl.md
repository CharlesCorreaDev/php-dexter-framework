# Coeficiente de correlação de Pearson (r)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-correl.php

---

# trader\_correl

(PECL trader >= 0.2.0)

trader\_correl — Coeficiente de correlação de Pearson (r)

### Descrição

function **trader\_correl**([array](language.types.array.md) `$real0`, [array](language.types.array.md) `$real1`, [int](language.types.integer.md) `$timePeriod` = ?): [array](language.types.array.md)

### Parâmetros

`real0`
:   Array de valores reais.

`real1`
:   Array de valores reais.

`timePeriod`
:   Número de período. Intervalo válido de 2 a 100000.

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
