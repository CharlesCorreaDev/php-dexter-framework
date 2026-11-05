# Desabilita item de menu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menuitem.disable.php

---

# UI\MenuItem::disable

(UI 0.9.9)

UI\MenuItem::disable — Desabilita item de menu

### Descrição

public function **UI\MenuItem::disable**()

Desabilita este item de menu.

### Parâmetros

Esta função não possui parâmetros.

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
