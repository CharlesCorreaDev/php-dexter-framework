# Define dimensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.setsize.php

---

# UI\Window::setSize

(UI 0.9.9)

UI\Window::setSize — Define dimensão

### Descrição

public function **UI\Window::setSize**([UI\Size](class.ui-size.md) `$size`)

Define a dimensão desta janela.

### Parâmetros

`size`

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
