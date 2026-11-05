# Movimento Direcional Negativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-minus-dm.php

---

# trader\_minus\_dm

(PECL trader >= 0.2.0)

trader\_minus\_dm — Movimento Direcional Negativo

### Descrição

function **trader\_minus\_dm**([array](language.types.array.md) `$high`, [array](language.types.array.md) `$low`, [int](language.types.integer.md) `$timePeriod` = ?): [array](language.types.array.md)

### Parâmetros

`high`
:   Preço alto, array de valores reais.

`low`
:   Preço baixo, array de valores reais.

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
