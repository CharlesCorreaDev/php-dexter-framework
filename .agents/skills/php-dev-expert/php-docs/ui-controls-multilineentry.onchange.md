# Manipulador de alteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-multilineentry.onchange.php

---

# UI\Controls\MultilineEntry::onChange

(UI 0.9.9)

UI\Controls\MultilineEntry::onChange — Manipulador de alteração

### Descrição

protected function **UI\Controls\MultilineEntry::onChange**()

Executado quando o texto nesta entrada multilinhas é alterado.

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
