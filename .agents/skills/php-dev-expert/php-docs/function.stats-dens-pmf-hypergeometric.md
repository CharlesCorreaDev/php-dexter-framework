# Função de massa de probabilidade da distribuição hipergeométrica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-dens-pmf-hypergeometric.php

---

# stats\_dens\_pmf\_hypergeometric

(PECL stats >= 1.0.0)

stats\_dens\_pmf\_hypergeometric — Função de massa de probabilidade da distribuição hipergeométrica

### Descrição

function **stats\_dens\_pmf\_hypergeometric**(  
    [float](language.types.float.md) `$n1`,  
    [float](language.types.float.md) `$n2`,  
    [float](language.types.float.md) `$N1`,  
    [float](language.types.float.md) `$N2`  
): [float](language.types.float.md)

Retorna a massa de probabilidade em `n1`, onde a variável aleatória
segue a distribuição hipergeométrica cujo número de falhas é
`n2`, o número de amostras de sucesso é `N1`,
e o número de amostras de falhas é `N2`.

### Parâmetros

`n1`
:   O número de sucessos em que a massa de probabilidade é calculada

`n2`
:   O número de falhas da distribuição

`N1`
:   O número de amostras de sucesso da distribuição

`N2`
:   O número de amostras de falha da distribuição

### Valor Retornado

A massa de probabilidade em `n1` ou **`false`** para falha.

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
