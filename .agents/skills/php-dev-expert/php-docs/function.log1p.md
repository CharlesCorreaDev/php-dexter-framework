# Retorna log(1 + número), calculado de forma que seja preciso mesmo quando
   o valor do número seja próximo de zero.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.log1p.php

---

# log1p

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

log1p — 
Retorna log(1 + número), calculado de forma que seja preciso mesmo quando
o valor do número seja próximo de zero.

### Descrição

function **log1p**([float](language.types.float.md) `$num`): [float](language.types.float.md)

**log1p()** retorna log(1 +
`num`) computado de forma que seja preciso mesmo
quando o valor de `num` esteja próximo de zero.
[log()](function.log.md) poderia retornar apenas log(1) neste caso
devido à falta de precisão.

### Parâmetros

`num`
:   O argumento a ser processado

### Valor Retornado

log(1 + `num`)

### Veja também

- [expm1()](function.expm1.md) - Retorna exp($num) - 1, computado de forma precisa mesmo
  quando o valor do número está próximo de zero.
- [log()](function.log.md) - Logaritmo natural
- [log10()](function.log10.md) - Logaritmo na base 10

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
