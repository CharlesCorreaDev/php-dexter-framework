# Retorna exp($num) - 1, computado de forma precisa mesmo
   quando o valor do número está próximo de zero.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.expm1.php

---

# expm1

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

expm1 — 
Retorna `exp($num) - 1`, computado de forma precisa mesmo
quando o valor do número está próximo de zero.

### Descrição

function **expm1**([float](language.types.float.md) `$num`): [float](language.types.float.md)

**expm1()** retorna o equivalente a
`exp($num) - 1` computado de forma
precisa mesmo se o valor de `num` for próximo de zero,
que é um caso onde `exp($num) - 1` poderia ser
impreciso devido à subtração de dois números quase iguais.

### Parâmetros

`num`
:   O argumento a ser processado

### Valor Retornado

`e` elevado à potência de `num` menos um.

### Veja também

- [log1p()](function.log1p.md) - Retorna log(1 + número), calculado de forma que seja preciso mesmo quando
  o valor do número seja próximo de zero.
- [exp()](function.exp.md) - Calcula o expoente de e

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
