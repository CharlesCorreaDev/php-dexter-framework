# Detecta somente leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-entry.isreadonly.php

---

# UI\Controls\Entry::isReadOnly

(UI 0.9.9)

UI\Controls\Entry::isReadOnly — Detecta somente leitura

### Descrição

public function **UI\Controls\Entry::isReadOnly**(): [bool](language.types.boolean.md)

Detecta se esta entrada é somente leitura.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

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
