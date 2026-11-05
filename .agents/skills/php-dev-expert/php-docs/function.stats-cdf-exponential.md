# Calcula qualquer parâmetro da distribuição exponencial, dados os valores dos outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-exponential.php

---

# stats\_cdf\_exponential

(PECL stats >= 1.0.0)

stats\_cdf\_exponential — Calcula qualquer parâmetro da distribuição exponencial, dados os valores dos outros

### Descrição

function **stats\_cdf\_exponential**([float](language.types.float.md) `$par1`, [float](language.types.float.md) `$par2`, [int](language.types.integer.md) `$which`): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa ou um de seus parâmetros,
da distribuição de exponencial. O tipo do valor de retorno e os parâmetros
(`par1` e `par2`) são determinados por
`which`.

A tabela a seguir lista o valor de retorno e os parâmetros por `which`.
FDA, x e lambda denotam a função distribuição acumulada, o valor da variável aleatória
e o parâmetro de taxa da distribuição exponencial, respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` |
| --- | --- | --- | --- |
| 1 | FDA | x | lambda |
| 2 | x | FDA | lambda |
| 3 | lambda | x | FDA |

### Parâmetros

`par1`
:   O primeiro parâmetro

`par2`
:   O segundo parâmetro

`which`
:   O sinalizador para determinar o que deve ser calculado

### Valor Retornado

Retorna FDA, x ou lambda, determinado por `which`.

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
