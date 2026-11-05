# Sai de um Laço UI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ui-quit.php

---

# UI\quit

(UI 2.0.0)

UI\quit — Sai de um Laço UI

### Descrição

function **UI\quit**(): [void](language.types.void.md)

Faz com que o PHP saia do laço de repetição principal.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

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
