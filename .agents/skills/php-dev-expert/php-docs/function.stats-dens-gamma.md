# Função de densidade de probabilidade da distribuição gama

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-gamma.php

---

# stats\_dens\_gamma

(PECL stats >= 1.0.0)

stats\_dens\_gamma — Função de densidade de probabilidade da distribuição gama

### Descrição

function **stats\_dens\_gamma**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$shape`, [float](language.types.float.md) `$scale`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição gama cujo parâmetro de forma
é `shape` e o parâmetro de escala é `scale`.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`shape`
:   O parâmetro de forma da distribuição

`scale`
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
