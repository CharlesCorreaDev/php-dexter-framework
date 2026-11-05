# Calcula qualquer parâmetro da distribuição de Cauchy, dados os valores dos outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-cauchy.php

---

# stats\_cdf\_cauchy

(PECL stats >= 1.0.0)

stats\_cdf\_cauchy — Calcula qualquer parâmetro da distribuição de Cauchy, dados os valores dos outros

### Descrição

function **stats\_cdf\_cauchy**(  
    [float](language.types.float.md) `$par1`,  
    [float](language.types.float.md) `$par2`,  
    [float](language.types.float.md) `$par3`,  
    [int](language.types.integer.md) `$which`  
): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa ou um de seus parâmetros,
da distribuição de Cauchy. O tipo do valor de retorno e os parâmetros
(`par1`, `par2` e `par3`)
são determinados por `which`.

A tabela a seguir lista o valor de retorno e os parâmetros por `which`.
FDA, x, x0 e gama denotam a função distribuição acumulada, o valor da variável aleatória,
a localização e o parâmetro de escala da distribuição de Cauchy, respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` | `par3` |
| --- | --- | --- | --- | --- |
| 1 | FDA | x | x0 | gama |
| 2 | x | FDA | x0 | gama |
| 3 | x0 | x | FDA | gama |
| 4 | gama | x | FDA | x0 |

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

Retorna FDA, x, x0 ou gamma, determinado por `which`.

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
