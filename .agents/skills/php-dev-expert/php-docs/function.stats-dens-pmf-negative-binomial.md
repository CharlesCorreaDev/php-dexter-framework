# Função de massa de probabilidade da distribuição binomial negativa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-pmf-negative-binomial.php

---

# stats\_dens\_pmf\_negative\_binomial

(PECL stats >= 1.0.0)

stats\_dens\_pmf\_negative\_binomial — Função de massa de probabilidade da distribuição binomial negativa

### Descrição

function **stats\_dens\_pmf\_negative\_binomial**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$n`, [float](language.types.float.md) `$pi`): [float](language.types.float.md)

Retorna a massa de probabilidade em `x`, onde a
variável aleatória segue a distribuição binomial negativa, da qual
o número de sucessos é `n` e a
taxa de sucesso é `pi`.

### Parâmetros

`x`
:   O valor no qual a massa de probabilidade é calculada

`n`
:   O número do sucesso da distribuição

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
