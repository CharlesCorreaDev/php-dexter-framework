# Calcula qualquer parâmetro da distribuição beta, dados os valores dos outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-beta.php

---

# stats\_cdf\_beta

(PECL stats >= 1.0.0)

stats\_cdf\_beta — Calcula qualquer parâmetro da distribuição beta, dados os valores dos outros

### Descrição

function **stats\_cdf\_beta**(  
    [float](language.types.float.md) `$par1`,  
    [float](language.types.float.md) `$par2`,  
    [float](language.types.float.md) `$par3`,  
    [int](language.types.integer.md) `$which`  
): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa ou um de seus parâmetros,
da distribuição beta. Os tipos do valor de retorno e dos parâmetros (`par1`,
`par2` e `par3`) são determinados por
`which`.

A tabela a seguir lista o valor de retorno e os parâmetros em relação a `which`.
FDA, x, alfa e beta denotam a função distribuição acumulada, o valor da variável aleatória
e os parâmetros de forma da distribuição beta, respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` | `par3` |
| --- | --- | --- | --- | --- |
| 1 | FDA | x | alfa | beta |
| 2 | x | FDA | alfa | beta |
| 3 | alfa | x | FDA | beta |
| 4 | beta | x | FDA | alfa |

### Parâmetros

`par1`
:   O primeiro parâmetro

`par2`
:   O segundo parâmetro

`par3`
:   O terceiro parâmetro

`which`
:   O sinalizador para determinar o que deve ser calculado

### Valor Retornado

Retorna FDA, x, alfa ou beta, determinado por `which`.

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
