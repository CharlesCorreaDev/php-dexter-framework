# Função de densidade de probabilidade da distribuição beta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-beta.php

---

# stats\_dens\_beta

(PECL stats >= 1.0.0)

stats\_dens\_beta — Função de densidade de probabilidade da distribuição beta

### Descrição

function **stats\_dens\_beta**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$a`, [float](language.types.float.md) `$b`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição beta cujos parâmetros de forma
são `a` e `b`.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`a`
:   O parâmetro de forma da distribuição

`b`
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
