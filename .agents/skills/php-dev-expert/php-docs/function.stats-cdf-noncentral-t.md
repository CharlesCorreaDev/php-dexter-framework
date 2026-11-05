# Calcula qualquer parâmetro da distribuição t não centralizada e fornece valores para os outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-noncentral-t.php

---

# stats\_cdf\_noncentral\_t

(PECL stats >= 1.0.0)

stats\_cdf\_noncentral\_t — Calcula qualquer parâmetro da distribuição t não centralizada e fornece valores para os outros

### Descrição

function **stats\_cdf\_noncentral\_t**(  
    [float](language.types.float.md) `$par1`,  
    [float](language.types.float.md) `$par2`,  
    [float](language.types.float.md) `$par3`,  
    [int](language.types.integer.md) `$which`  
): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa, ou um de seus parâmetros,
da distribuição t não centralizada. O tipo do valor de retorno e os parâmetros
(`par1`, `par2` e `par3`)
são determinados por `which`.

A tabela a seguir lista o valor de retorno e os parâmetros por `which`.
FDA, x, ni e mi denotam a função distribuição acumulada, o valor da variável aleatória,
os graus de liberdade e o parâmetro de não centralidade da distribuição,
respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` | `par3` |
| --- | --- | --- | --- | --- |
| 1 | FDA | x | ni | mi |
| 2 | x | FDA | ni | mi |
| 3 | ni | x | FDA | mi |
| 4 | mi | x | FDA | ni |

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

Retorna FDA, x, ni ou mi, determinado por `which`.

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
