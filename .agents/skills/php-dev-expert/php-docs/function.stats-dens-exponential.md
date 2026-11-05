# Função de densidade de probabilidade da distribuição exponencial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-exponential.php

---

# stats\_dens\_exponential

(PECL stats >= 1.0.0)

stats\_dens\_exponential — Função de densidade de probabilidade da distribuição exponencial

### Descrição

function **stats\_dens\_exponential**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$scale`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição exponencial cuja escala é
`scale`.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`scale`
:   A escala da distribuição

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
