# Função de densidade de probabilidade da distribuição de Laplace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-laplace.php

---

# stats\_dens\_laplace

(PECL stats >= 1.0.0)

stats\_dens\_laplace — Função de densidade de probabilidade da distribuição de Laplace

### Descrição

function **stats\_dens\_laplace**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$ave`, [float](language.types.float.md) `$stdev`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição de Laplace, cujo parâmetro de localização
é `ave` e o parâmetro de escala é `stdev`.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`ave`
:   O parâmetro de localização da distribuição

`stdev`
:   O parâmetro de forma da distribuição

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
