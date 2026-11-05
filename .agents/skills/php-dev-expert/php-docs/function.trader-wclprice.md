# Preço de fechamento ponderado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-wclprice.php

---

# trader\_wclprice

(PECL trader >= 0.2.0)

trader\_wclprice — Preço de fechamento ponderado

### Descrição

function **trader\_wclprice**([array](language.types.array.md) `$high`, [array](language.types.array.md) `$low`, [array](language.types.array.md) `$close`): [array](language.types.array.md)

### Parâmetros

`high`
:   Preço alto, array de valores reais.

`low`
:   Preço baixo, array de valores reais.

`close`
:   Preço de fechamento, array de valores reais.

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
