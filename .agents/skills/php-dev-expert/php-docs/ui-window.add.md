# Adiciona um controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.add.php

---

# UI\Window::add

(UI 0.9.9)

UI\Window::add — Adiciona um controle

### Descrição

public function **UI\Window::add**([UI\Control](class.ui-control.md) `$control`)

Adiciona um controle a esta janela.

### Parâmetros

`control`
:   O controle a adicionar.

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
