# Detecta marcação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menuitem.ischecked.php

---

# UI\MenuItem::isChecked

(UI 0.9.9)

UI\MenuItem::isChecked — Detecta marcação

### Descrição

public function **UI\MenuItem::isChecked**(): [bool](language.types.boolean.md)

Detecta se este item de menu está marcado.

### Parâmetros

Esta função não possui parâmetros.

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
