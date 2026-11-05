# Obtém dimensão de janela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.getsize.php

---

# UI\Window::getSize

(UI 0.9.9)

UI\Window::getSize — Obtém dimensão de janela

### Descrição

public function **UI\Window::getSize**(): [UI\Size](class.ui-size.md)

Retorna a dimensão desta janela.

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
