# Manipulador de clique

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-button.onclick.php

---

# UI\Controls\Button::onClick

(UI 0.9.9)

UI\Controls\Button::onClick — Manipulador de clique

### Descrição

protected function **UI\Controls\Button::onClick**()

Executado quando este botão é clicado.

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
