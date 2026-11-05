# Deteção de somente leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-multilineentry.isreadonly.php

---

# UI\Controls\MultilineEntry::isReadOnly

(UI 0.9.9)

UI\Controls\MultilineEntry::isReadOnly — Deteção de somente leitura

### Descrição

public function **UI\Controls\MultilineEntry::isReadOnly**(): [bool](language.types.boolean.md)

Detecta se esta entrada multilinhas é somente leitura.

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
