# Define marcação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menuitem.setchecked.php

---

# UI\MenuItem::setChecked

(UI 0.9.9)

UI\MenuItem::setChecked — Define marcação

### Descrição

public function **UI\MenuItem::setChecked**([bool](language.types.boolean.md) `$checked`)

Define o status de marcação deste item de menu.

### Parâmetros

`checked`
:   O novo status.

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
