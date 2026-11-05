# Retorna o coeficiente de correlação de Pearson de dois conjuntos de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-stat-correlation.php

---

# stats\_stat\_correlation

(PECL stats >= 1.0.0)

stats\_stat\_correlation — Retorna o coeficiente de correlação de Pearson de dois conjuntos de dados

### Descrição

function **stats\_stat\_correlation**([array](language.types.array.md) `$arr1`, [array](language.types.array.md) `$arr2`): [float](language.types.float.md)

Retorna o coeficiente de correlação de Pearson entre `arr1` e `arr2`.

### Parâmetros

`arr1`
:   O primeiro array

`arr2`
:   O segundo array

### Valor Retornado

Retorna o coeficiente de correlação de Pearson entre `arr1` e `arr2`,
ou **`false`** em caso de falha.

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
