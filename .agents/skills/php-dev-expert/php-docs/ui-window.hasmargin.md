# Detecção de margem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.hasmargin.php

---

# UI\Window::hasMargin

(UI 0.9.9)

UI\Window::hasMargin — Detecção de margem

### Descrição

public function **UI\Window::hasMargin**(): [bool](language.types.boolean.md)

Detecta se são usadas margens nesta janela.

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
