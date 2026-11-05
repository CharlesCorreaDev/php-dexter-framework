# Anexa um item de menu "About"

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menu.appendabout.php

---

# UI\Menu::appendAbout

(UI 0.9.9)

UI\Menu::appendAbout — Anexa um item de menu "About"

### Descrição

public function **UI\Menu::appendAbout**([string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

Anexa um item de menu "About".

### Parâmetros

`type`
:   O tipo do novo item.

### Valor Retornado

O item de menu "About" do tipo informado.

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
