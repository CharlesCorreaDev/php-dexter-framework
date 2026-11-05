# Função de densidade de probabilidade da distribuição uniforme

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-uniform.php

---

# stats\_dens\_uniform

(PECL stats >= 1.0.0)

stats\_dens\_uniform — Função de densidade de probabilidade da distribuição uniforme

### Descrição

function **stats\_dens\_uniform**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$a`, [float](language.types.float.md) `$b`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição uniforme cujo limite inferior é
`a` e o limite superior é `b`.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`a`
:   O limite inferior da distribuição

`b`
:   O limite superior da distribuição

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
