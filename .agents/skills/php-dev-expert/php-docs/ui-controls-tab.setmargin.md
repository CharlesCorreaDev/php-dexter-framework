# Define margem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-tab.setmargin.php

---

# UI\Controls\Tab::setMargin

(UI 0.9.9)

UI\Controls\Tab::setMargin — Define margem

### Descrição

public function **UI\Controls\Tab::setMargin**([int](language.types.integer.md) `$page`, [bool](language.types.boolean.md) `$margin`)

Habilita ou desabilita margens na página selecionada.

### Parâmetros

`page`
:   A página a selecionar.

`margin`
:   Liga ou desliga a margem.

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
