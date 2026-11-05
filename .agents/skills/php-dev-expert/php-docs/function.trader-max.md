# Maior valor em um período especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-max.php

---

# trader\_max

(PECL trader >= 0.2.0)

trader\_max — Maior valor em um período especificado

### Descrição

function **trader\_max**([array](language.types.array.md) `$real`, [int](language.types.integer.md) `$timePeriod` = ?): [array](language.types.array.md)

### Parâmetros

`real`
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
