# Retorna o valor do percentil

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-stat-percentile.php

---

# stats\_stat\_percentile

(PECL stats >= 1.0.0)

stats\_stat\_percentile — Retorna o valor do percentil

### Descrição

function **stats\_stat\_percentile**([array](language.types.array.md) `$arr`, [float](language.types.float.md) `$perc`): [float](language.types.float.md)

Retorna o valor do `perc`-ésimo percentil do array `arr`.

### Parâmetros

`arr`
:   O array de entrada

`perc`
:   O percentil

### Valor Retornado

Retorna os valores de percentil do array de entrada.

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
