# Arco tangente de duas variáveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.atan2.php

---

# atan2

(PHP 4, PHP 5, PHP 7, PHP 8)

atan2 — Arco tangente de duas variáveis

### Descrição

function **atan2**([float](language.types.float.md) `$y`, [float](language.types.float.md) `$x`): [float](language.types.float.md)

Esta função calcula o arco tangente das duas variaveis
`x` e `y`. É
similar a calcular o arco tangente de
`y` / `x`, exceto que
os sinais de ambos os argumentos são usados para determinar o
quadrante do resultado.

Esta função retorna o resultado em radianos entre -PI e
PI (inclusive).

### Parâmetros

`y`
:   Dividendo

`x`
:   Divisor

### Valor Retornado

O arco tangente de `y`/`x`
em radianos.

### Veja também

- [atan()](function.atan.md) - Arco tangente

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
