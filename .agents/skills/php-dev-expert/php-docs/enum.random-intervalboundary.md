# A enumeração Random\IntervalBoundary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enum.random-intervalboundary.php

---

# A enumeração Random\IntervalBoundary

(PHP 8 >= 8.3.0)

## Introdução

A enumeração **Random\IntervalBoundary** especifica
se um intervalo inclui os valores dos limites dentro do conjunto de valores
que caem no intervalo.

## Resumo da enumeração

namespace **Random**;

enum ****IntervalBoundary****  
{

case ClosedOpen
; //
Um intervalo aberto à direita.
O limite inferior é incluído no intervalo,
o superior não.

case ClosedClosed
; //
Um intervalo fechado.
Ambos os limites são incluídos no intervalo.

case OpenClosed
; //
Um intervalo aberto à esquerda.
O limite superior é incluído no intervalo,
o inferior não.

case OpenOpen
; //
Um intervalo aberto.
Nenhum limite é incluído no intervalo.

}

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
