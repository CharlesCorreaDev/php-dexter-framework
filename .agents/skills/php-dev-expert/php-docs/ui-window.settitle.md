# Título da janela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.settitle.php

---

# UI\Window::setTitle

(UI 0.9.9)

UI\Window::setTitle — Título da janela

### Descrição

public function **UI\Window::setTitle**([string](language.types.string.md) `$title`)

Define o título desta janela.

### Parâmetros

`title`
:   O novo título.

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
