# Mostra caixa de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.error.php

---

# UI\Window::error

(UI 0.9.9)

UI\Window::error — Mostra caixa de erro

### Descrição

public function **UI\Window::error**([string](language.types.string.md) `$title`, [string](language.types.string.md) `$msg`)

Mostra uma caixa de erro.

### Parâmetros

`title`
:   O título da caixa de erro.

`msg`
:   A mensagem para a caixa de erro.

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
