# Obtém título

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.gettitle.php

---

# UI\Window::getTitle

(UI 0.9.9)

UI\Window::getTitle — Obtém título

### Descrição

public function **UI\Window::getTitle**(): [string](language.types.string.md)

Recupera o título desta janela.

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
