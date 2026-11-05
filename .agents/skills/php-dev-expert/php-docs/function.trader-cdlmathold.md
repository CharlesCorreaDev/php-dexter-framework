# Aperto do Mat

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.trader-cdlmathold.php

---

# trader\_cdlmathold

(PECL trader >= 0.2.0)

trader\_cdlmathold — Aperto do Mat

### Descrição

function **trader\_cdlmathold**(  
    [array](language.types.array.md) `$open`,  
    [array](language.types.array.md) `$high`,  
    [array](language.types.array.md) `$low`,  
    [array](language.types.array.md) `$close`,  
    [float](language.types.float.md) `$penetration` = ?  
): [array](language.types.array.md)

### Parâmetros

`open`
:   Preço de abertura, array de valores reais.

`high`
:   Preço alto, array de valores reais.

`low`
:   Preço baixo, array de valores reais.

`close`
:   Preço de fechamento, array de valores reais.

`penetration`
:   Percentual de penetração de um candle em outro candle.

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
