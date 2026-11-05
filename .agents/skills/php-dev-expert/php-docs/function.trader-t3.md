# Média Móvel Exponencial Tripla (T3)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-t3.php

---

# trader\_t3

(PECL trader >= 0.2.0)

trader\_t3 — Média Móvel Exponencial Tripla (T3)

### Descrição

function **trader\_t3**([array](language.types.array.md) `$real`, [int](language.types.integer.md) `$timePeriod` = ?, [float](language.types.float.md) `$vFactor` = ?): [array](language.types.array.md)

### Parâmetros

`real`
:   Array de valores reais.

`timePeriod`
:   Número de período. Intervalo válido de 2 a 100000.

`vFactor`
:   Fator de volume. Intervalo válido de 1 a 0.

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
