# Função de densidade de probabilidade da distribuição normal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-normal.php

---

# stats\_dens\_normal

(PECL stats >= 1.0.0)

stats\_dens\_normal — Função de densidade de probabilidade da distribuição normal

### Descrição

function **stats\_dens\_normal**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$ave`, [float](language.types.float.md) `$stdev`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição normal, cuja média é
`ave` e o desvio padrão é
`stdev`.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`ave`
:   A média da distribuição

`stdev`
:   O desvio padrão da distribuição

### Valor Retornado

A densidade de probabilidade em `x` ou **`false`** para falha.

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
