# Anexa um item separador no menu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menu.appendseparator.php

---

# UI\Menu::appendSeparator

(UI 0.9.9)

UI\Menu::appendSeparator — Anexa um item separador no menu

### Descrição

public function **UI\Menu::appendSeparator**()

Anexa um separador.

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
