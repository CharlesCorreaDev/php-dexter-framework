# Anexa um item de menu de preferências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menu.appendpreferences.php

---

# UI\Menu::appendPreferences

(UI 0.9.9)

UI\Menu::appendPreferences — Anexa um item de menu de preferências

### Descrição

public function **UI\Menu::appendPreferences**([string](language.types.string.md) `$type` = UI\MenuItem::class): [UI\MenuItem](class.ui-menuitem.md)

Anexa um item de menu de preferências.

### Parâmetros

`type`
:   O tipo do novo item.

### Valor Retornado

Um item de menu de preferências do tipo informado.

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
