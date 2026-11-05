# Constrói um novo menu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menu.construct.php

---

# UI\Menu::\_\_construct

(UI 0.9.9)

UI\Menu::\_\_construct — Constrói um novo menu

### Descrição

public function **UI\Menu::\_\_construct**([string](language.types.string.md) `$name`)

Constrói um novo menu.

### Parâmetros

`name`
:   O nome (texto) para o menu.

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
