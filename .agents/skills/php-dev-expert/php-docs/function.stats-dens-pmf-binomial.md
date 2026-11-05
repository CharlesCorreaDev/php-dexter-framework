# Função de massa de probabilidade da distribuição binomial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-pmf-binomial.php

---

# stats\_dens\_pmf\_binomial

(PECL stats >= 1.0.0)

stats\_dens\_pmf\_binomial — Função de massa de probabilidade da distribuição binomial

### Descrição

function **stats\_dens\_pmf\_binomial**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$n`, [float](language.types.float.md) `$pi`): [float](language.types.float.md)

Retorna a massa de probabilidade em `x`, onde a variável aleatória
segue a distribuição binomial cujo número de tentativas é `n`
e a taxa de sucesso é `pi`.

### Parâmetros

`x`
:   O valor no qual a massa de probabilidade é calculada

`n`
:   O número de tentativas da distribuição

`pi`
:   A taxa de sucesso da distribuição

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
