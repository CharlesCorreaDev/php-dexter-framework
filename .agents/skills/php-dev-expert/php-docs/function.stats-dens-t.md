# Função de densidade de probabilidade da distribuição t

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-t.php

---

# stats\_dens\_t

(PECL stats >= 1.0.0)

stats\_dens\_t — Função de densidade de probabilidade da distribuição t

### Descrição

function **stats\_dens\_t**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$dfr`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição t cujo grau de
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
