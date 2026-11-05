# Função de densidade de probabilidade da distribuição F

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-f.php

---

# stats\_dens\_f

(PECL stats >= 1.0.0)

stats\_dens\_f — Função de densidade de probabilidade da distribuição F

### Descrição

function **stats\_dens\_f**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$dfr1`, [float](language.types.float.md) `$dfr2`): [float](language.types.float.md)

Retorna a densidade de probabilidade em `x`, onde a
variável aleatória segue a distribuição F cujos graus de liberdade
são `dfr1` e `dfr2`.

### Parâmetros

`x`
:   O valor no qual a densidade de probabilidade é calculada

`dfr1`
:   O grau de liberdade da distribuição

`dfr2`
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
