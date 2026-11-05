# Seno hiperbólico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sinh.php

---

# sinh

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

sinh — Seno hiperbólico

### Descrição

function **sinh**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Retorna o seno hiperbólico de `num`,
definido como `(exp($num) - exp(-$num))/2`.

### Parâmetros

`num`
:   O argumento para processar

### Valor Retornado

O seno hiperbólico de `num`

### Veja também

- [sin()](function.sin.md) - Seno
- [asinh()](function.asinh.md) - Arco seno hiperbólico
- [cosh()](function.cosh.md) - Cosseno hiperbólico
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
