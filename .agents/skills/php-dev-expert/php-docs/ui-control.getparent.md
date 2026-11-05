# Obtém o controle pai

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.getparent.php

---

# UI\Control::getParent

(UI 0.9.9)

UI\Control::getParent — Obtém o controle pai

### Descrição

public function **UI\Control::getParent**(): [UI\Control](class.ui-control.md)

Retorna o controle pai.

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
