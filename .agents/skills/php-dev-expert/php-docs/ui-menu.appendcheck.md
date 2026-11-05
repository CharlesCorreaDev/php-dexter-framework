# Anexa um item de menu marcável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menu.appendcheck.php

---

# UI\Menu::appendCheck

(UI 0.9.9)

UI\Menu::appendCheck — Anexa um item de menu marcável

### Descrição

public function **UI\Menu::appendCheck**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

Anexa um item de menu marcável.

### Parâmetros

`name`
:   O nome (texto) para o novo item.

`type`
:   O tipo para o novo item.

### Valor Retornado

Um objeto de item de menu marcável do tipo informado.

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
