# Calcula qualquer parâmetro da distribuição binomial negativa, dados os valores dos outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-negative-binomial.php

---

# stats\_cdf\_negative\_binomial

(PECL stats >= 1.0.0)

stats\_cdf\_negative\_binomial — Calcula qualquer parâmetro da distribuição binomial negativa, dados os valores dos outros

### Descrição

function **stats\_cdf\_negative\_binomial**(  
    [float](language.types.float.md) `$par1`,  
    [float](language.types.float.md) `$par2`,  
    [float](language.types.float.md) `$par3`,  
    [int](language.types.integer.md) `$which`  
): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa ou um de seus parâmetros,
da distribuição binomial negativa. O tipo do valor de retorno e os parâmetros
(`par1`, `par2` e `par3`)
são determinados por `which`.

A tabela a seguir lista o valor de retorno e os parâmetros por `which`.
FDA, x, r e p denotam a função distribuição acumulada, o número de falhas, o número
de sucessos e a taxa de sucesso para cada tentativa, respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` | `par3` |
| --- | --- | --- | --- | --- |
| 1 | FDA | x | r | p |
| 2 | x | FDA | r | p |
| 3 | r | x | FDA | p |
| 4 | p | x | FDA | r |

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

Retorna FDA, x, r ou p, determinado por `which`.

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
