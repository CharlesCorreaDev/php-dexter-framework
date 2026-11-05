# Calcula qualquer parâmetro da distribuição F, dados os valores dos outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-f.php

---

# stats\_cdf\_f

(PECL stats >= 1.0.0)

stats\_cdf\_f — Calcula qualquer parâmetro da distribuição F, dados os valores dos outros

### Descrição

function **stats\_cdf\_f**(  
    [float](language.types.float.md) `$par1`,  
    [float](language.types.float.md) `$par2`,  
    [float](language.types.float.md) `$par3`,  
    [int](language.types.integer.md) `$which`  
): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa ou um de seus parâmetros,
da distribuição F. O tipo do valor de retorno e os parâmetros
(`par1`, `par2` e `par3`)
são determinados por `which`.

A tabela a seguir lista o valor de retorno e os parâmetros por `which`.
FDA, x, d1 e d2 denotam a função distribuição acumulada, o valor da variável aleatória
e o grau de liberdade da distribuição F, respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` | `par3` |
| --- | --- | --- | --- | --- |
| 1 | FDA | x | d1 | d2 |
| 2 | x | FDA | d1 | d2 |
| 3 | d1 | x | FDA | d2 |
| 4 | d2 | x | FDA | d1 |

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

Retorna FDA, x, d1 ou d2, determinado por `which`.

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
