# Uso de margem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.setmargin.php

---

# UI\Window::setMargin

(UI 0.9.9)

UI\Window::setMargin — Uso de margem

### Descrição

public function **UI\Window::setMargin**([bool](language.types.boolean.md) `$margin`)

Habilita ou desabilita o uso de margens para esta janela.

### Parâmetros

`margin`

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
