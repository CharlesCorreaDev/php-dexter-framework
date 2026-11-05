# Detecção de tela cheia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.isfullscreen.php

---

# UI\Window::isFullScreen

(UI 0.9.9)

UI\Window::isFullScreen — Detecção de tela cheia

### Descrição

public function **UI\Window::isFullScreen**(): [bool](language.types.boolean.md)

Detecta se esta janela está usando a tela inteira.

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
