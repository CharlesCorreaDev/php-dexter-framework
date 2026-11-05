# Anexa item de menu de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menu.appendquit.php

---

# UI\Menu::appendQuit

(UI 0.9.9)

UI\Menu::appendQuit — Anexa item de menu de saída

### Descrição

public function **UI\Menu::appendQuit**([string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

Anexa item de menu de saída

### Parâmetros

`type`
:   O tipo do novo item.

### Valor Retornado

Um item de menu de saída do tipo fornecido.

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
