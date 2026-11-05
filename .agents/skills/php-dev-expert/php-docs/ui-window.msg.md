# Mostra caixa de mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.msg.php

---

# UI\Window::msg

(UI 0.9.9)

UI\Window::msg — Mostra caixa de mensagem

### Descrição

public function **UI\Window::msg**([string](language.types.string.md) `$title`, [string](language.types.string.md) `$msg`)

Mostra uma caixa de mensagem.

### Parâmetros

`title`
:   O título da caixa de mensagem.

`msg`
:   A mensagem.

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
