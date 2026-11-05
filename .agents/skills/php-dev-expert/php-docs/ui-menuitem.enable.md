# Habilita item de menu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menuitem.enable.php

---

# UI\MenuItem::enable

(UI 0.9.9)

UI\MenuItem::enable — Habilita item de menu

### Descrição

public function **UI\MenuItem::enable**()

Habilita item de menu.

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
