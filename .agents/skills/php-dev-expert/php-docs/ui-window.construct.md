# Constrói uma nova janela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.construct.php

---

# UI\Window::\_\_construct

(UI 0.9.9)

UI\Window::\_\_construct — Constrói uma nova janela

### Descrição

public function **UI\Window::\_\_construct**([string](language.types.string.md) `$title`, Size `$size`, [bool](language.types.boolean.md) `$menu` = **`false`**)

Constrói uma nova janela

### Parâmetros

`title`
:   O título da janela.

`size`
:   A dimensão da janela.

`menu`
:   Opção de menu.

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
