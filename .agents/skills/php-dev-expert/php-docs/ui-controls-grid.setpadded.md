# Define preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-grid.setpadded.php

---

# UI\Controls\Grid::setPadded

(UI 0.9.9)

UI\Controls\Grid::setPadded — Define preenchimento

### Descrição

public function **UI\Controls\Grid::setPadded**([bool](language.types.boolean.md) `$padding`)

Habilita ou desabilita preenchimento para esta grade.

### Parâmetros

`padding`

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
