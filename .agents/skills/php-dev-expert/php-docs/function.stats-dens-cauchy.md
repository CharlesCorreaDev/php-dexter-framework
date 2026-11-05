# Função de densidade de probabilidade da distribuição de Cauchy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-cauchy.php

---

# stats\_dens\_cauchy

(PECL stats >= 1.0.0)

stats\_dens\_cauchy — Função de densidade de probabilidade da distribuição de Cauchy

### Descrição

function **stats\_dens\_cauchy**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$ave`, [float](language.types.float.md) `$stdev`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição de Cauchy, cuja localização e escala são
`ave` e `stdev`, respectivamente.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`ave`
:   O parâmetro de localização da distribuição

`stdev`
:   O parâmetro de escala da distribuição

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
