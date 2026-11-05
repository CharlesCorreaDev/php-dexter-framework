# Retorna o identificador do grupo do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getpgrp.php

---

# posix\_getpgrp

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getpgrp — Retorna o identificador do grupo do processo atual

### Descrição

function **posix\_getpgrp**(): [int](language.types.integer.md)

Retorna o identificador do grupo do processo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o identificador, como um [int](language.types.integer.md).

### Veja também

- POSIX.1 e a página de manual getpgrp(2) no sistema POSIX
  para obter mais informações sobre grupos de processos

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
