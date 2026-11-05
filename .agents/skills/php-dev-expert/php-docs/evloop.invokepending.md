# Invoca todos os observadores pendentes enquanto redefine seu estado pendente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.invokepending.php

---

# EvLoop::invokePending

(PECL ev >= 0.2.0)

EvLoop::invokePending — Invoca todos os observadores pendentes enquanto redefine seu estado pendente

### Descrição

public
function **EvLoop::invokePending**(): [void](language.types.void.md)

Invoca todos os observadores pendentes enquanto redefine seu estado pendente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
