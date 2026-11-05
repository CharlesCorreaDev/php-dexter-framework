# Retorna um inteiro descrevendo o backend usado por libev

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.backend.php

---

# EvLoop::backend

(PECL ev >= 0.2.0)

EvLoop::backend — Retorna um inteiro descrevendo o backend usado por libev

### Descrição

public
function **EvLoop::backend**(): [int](language.types.integer.md)

O mesmo que
[Ev::backend()](ev.backend.md),
porém para a instância do laço.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um inteiro descrevendo o backend usado por libev.
Consulte [Ev::backend()](ev.backend.md).

### Veja também

- [Ev::backend()](ev.backend.md) - Retorna um inteiro descrevendo o backend usado por libev

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
