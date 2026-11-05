# Calcula qualquer parâmetro da distribuição qui-quadrado, dados os valores dos outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-chisquare.php

---

# stats\_cdf\_chisquare

(PECL stats >= 1.0.0)

stats\_cdf\_chisquare — Calcula qualquer parâmetro da distribuição qui-quadrado, dados os valores dos outros

### Descrição

function **stats\_cdf\_chisquare**([float](language.types.float.md) `$par1`, [float](language.types.float.md) `$par2`, [int](language.types.integer.md) `$which`): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa ou um de seus parâmetros,
da distribuição de qui-quadrado. O tipo do valor de retorno e os parâmetros
(`par1` e `par2`) são determinados por
`which`.

A tabela a seguir lista o valor de retorno e os parâmetros por `which`.
FDA, x e k denotam a função distribuição acumulada, o valor da variável aleatória
e o grau de liberdade da distribuição qui-quadrado, respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` |
| --- | --- | --- | --- |
| 1 | FDA | x | k |
| 2 | x | FDA | k |
| 3 | k | x | FDA |

### Parâmetros

`par1`
:   O primeiro parâmetro

`par2`
:   O segundo parâmetro

`which`
:   O sinalizador para determinar o que deve ser calculado

### Valor Retornado

Retorna FDA, x ou k, determinado por `which`.

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
