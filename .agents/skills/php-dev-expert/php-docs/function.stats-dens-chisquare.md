# Função de densidade de probabilidade da distribuição qui-quadrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-chisquare.php

---

# stats\_dens\_chisquare

(PECL stats >= 1.0.0)

stats\_dens\_chisquare — Função de densidade de probabilidade da distribuição qui-quadrado

### Descrição

function **stats\_dens\_chisquare**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$dfr`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição qui-quadrado cujo grau de
liberdade é `dfr`.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`dfr`
:   O grau de liberdade da distribuição

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
