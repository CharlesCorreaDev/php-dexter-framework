# Anexa um item de menu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menu.append.php

---

# UI\Menu::append

(UI 0.9.9)

UI\Menu::append — Anexa um item de menu

### Descrição

public function **UI\Menu::append**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

Anexa um novo item de menu

### Parâmetros

`name`
:   O nome (texto) do novo item de menu.

`type`
:   O tipo do novo item.

### Valor Retornado

Um objeto construído do tipo definido.

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
