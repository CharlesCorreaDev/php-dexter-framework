# Cosseno hiperbólico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cosh.php

---

# cosh

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

cosh — Cosseno hiperbólico

### Descrição

function **cosh**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna o cosseno hiperbólico de `num`,
definido por `(exp($num) + exp(-$num))/2`.

### Parâmetros

`num`
:   O argumento a processar

### Valor Retornado

O cosseno hiperbólico de `num`

### Veja também

- [cos()](function.cos.md) - Cosseno
- [acosh()](function.acosh.md) - Arco cosseno hiperbólico
- [sinh()](function.sinh.md) - Seno hiperbólico
- [tanh()](function.tanh.md) - Tangente hiperbólica

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
