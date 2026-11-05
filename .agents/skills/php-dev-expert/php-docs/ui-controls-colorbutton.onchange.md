# Manipulador de alteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-colorbutton.onchange.php

---

# UI\Controls\ColorButton::onChange

(UI 0.9.9)

UI\Controls\ColorButton::onChange — Manipulador de alteração

### Descrição

protected function **UI\Controls\ColorButton::onChange**()

Executada quando a cor selecionada é alterada.

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
