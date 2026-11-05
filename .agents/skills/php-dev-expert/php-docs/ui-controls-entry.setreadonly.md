# Define como somente leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-entry.setreadonly.php

---

# UI\Controls\Entry::setReadOnly

(UI 0.9.9)

UI\Controls\Entry::setReadOnly — Define como somente leitura

### Descrição

public function **UI\Controls\Entry::setReadOnly**([bool](language.types.boolean.md) `$readOnly`)

Habilita ou desabilita o acesso somente leitura para esta entrada.

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
