# Uso de bordas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.setborders.php

---

# UI\Window::setBorders

(UI 0.9.9)

UI\Window::setBorders — Uso de bordas

### Descrição

public function **UI\Window::setBorders**([bool](language.types.boolean.md) `$borders`)

Habilita ou desabilita o uso de bordas nesta janela.

### Parâmetros

`borders`

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
