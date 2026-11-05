# Calcula qualquer parâmetro da distribuição F não centralizada, dados os valores dos outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-noncentral-f.php

---

# stats\_cdf\_noncentral\_f

(PECL stats >= 1.0.0)

stats\_cdf\_noncentral\_f — Calcula qualquer parâmetro da distribuição F não centralizada, dados os valores dos outros

### Descrição

function **stats\_cdf\_noncentral\_f**(  
    [float](language.types.float.md) `$par1`,  
    [float](language.types.float.md) `$par2`,  
    [float](language.types.float.md) `$par3`,  
    [float](language.types.float.md) `$par4`,  
    [int](language.types.integer.md) `$which`  
): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa ou um de seus parâmetros,
da distribuição F não centralizada. O tipo do valor de retorno e os parâmetros
(`par1`, `par2`, `par3`
e `par4`) são determinados por `which`.

A tabela a seguir lista o valor de retorno e os parâmetros por `which`.
FDA, x, ni1, ni2 e lambda denotam a função distribuição acumulada, o valor da
variável aleatória, o grau de liberdade e o parâmetro de não centralidade da distribuição,
respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` | `par3` | `par4` |
| --- | --- | --- | --- | --- | --- |
| 1 | FDA | x | ni1 | ni2 | lambda |
| 2 | x | FDA | ni1 | ni2 | lambda |
| 3 | ni1 | x | FDA | ni2 | lambda |
| 4 | ni2 | x | FDA | ni1 | lambda |
| 5 | lambda | x | FDA | ni1 | ni2 |

### Parâmetros

`par1`
:   O primeiro parâmetro

`par2`
:   O segundo parâmetro

`par3`
:   O terceiro parâmetro

`par4`
:   The fourth parameter

`which`
:   O sinalizador para determinar o que deve ser calculado

### Valor Retornado

Retorna FDA, x, ni1, ni2 ou lambda, determinado por `which`.

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
