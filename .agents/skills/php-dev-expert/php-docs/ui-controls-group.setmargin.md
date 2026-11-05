# Define margem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-group.setmargin.php

---

# UI\Controls\Group::setMargin

(UI 0.9.9)

UI\Controls\Group::setMargin — Define margem

### Descrição

public function **UI\Controls\Group::setMargin**([bool](language.types.boolean.md) `$margin`)

Habilita ou desabilita margens para este grupo.

### Parâmetros

`margin`

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
