# Função de massa de probabilidade da distribuição de Poisson

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-pmf-poisson.php

---

# stats\_dens\_pmf\_poisson

(PECL stats >= 1.0.0)

stats\_dens\_pmf\_poisson — Função de massa de probabilidade da distribuição de Poisson

### Descrição

function **stats\_dens\_pmf\_poisson**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$lb`): [float](language.types.float.md)

Retorna a massa de probabilidade em `x`, onde a variável aleatória
segue a distribuição de Poisson cujo parâmetro é `lb`.

### Parâmetros

`x`
:   O valor no qual a massa de probabilidade é calculada

`lb`
:   O parâmetro da distribuição de Poisson

### Valor Retornado

A massa de probabilidade em `x` ou **`false`** para falha.

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
