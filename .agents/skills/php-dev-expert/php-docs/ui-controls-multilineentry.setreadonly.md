# Define como somente leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-multilineentry.setreadonly.php

---

# UI\Controls\MultilineEntry::setReadOnly

(UI 0.9.9)

UI\Controls\MultilineEntry::setReadOnly — Define como somente leitura

### Descrição

public function **UI\Controls\MultilineEntry::setReadOnly**([bool](language.types.boolean.md) `$readOnly`)

Habilita ou desabilita o acesso somente leitura nesta entrada multilinhas.

### Parâmetros

`readOnly`

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
