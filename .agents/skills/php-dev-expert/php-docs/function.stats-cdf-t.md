# Calcula qualquer parâmetro da distribuição t, dados os valores dos outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stats-cdf-t.php

---

# stats\_cdf\_t

(PECL stats >= 1.0.0)

stats\_cdf\_t — Calcula qualquer parâmetro da distribuição t, dados os valores dos outros

### Descrição

function **stats\_cdf\_t**([float](language.types.float.md) `$par1`, [float](language.types.float.md) `$par2`, [int](language.types.integer.md) `$which`): [float](language.types.float.md)

Retorna a função distribuição acumulada, sua inversa ou um de seus parâmetros
da distribuição t. O tipo do valor de retorno e dos parâmetros
(`par1` e `par2`) são determinados por
`which`.

A tabela a seguir lista o valor de retorno e os parâmetros por `which`.
FDA, x e ni denotam a função distribuição acumulada, o valor da variável aleatória
e os graus de liberdade da distribuição t, respectivamente.

**Valor de retorno e parâmetros**

| `which` | Valor de retorno | `par1` | `par2` |
| --- | --- | --- | --- |
| 1 | FDA | x | ni |
| 2 | x | FDA | ni |
| 3 | ni | x | FDA |

### Parâmetros

`par1`
:   O primeiro parâmetro

`par2`
:   O segundo parâmetro

`which`
:   O sinalizador para determinar o que deve ser calculado

### Valor Retornado

Retorna FDA, x ou ni, determinado por `which`.

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
