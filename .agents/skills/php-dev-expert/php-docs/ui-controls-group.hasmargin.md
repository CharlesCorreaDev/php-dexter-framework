# Detecção de margem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-group.hasmargin.php

---

# UI\Controls\Group::hasMargin

(UI 0.9.9)

UI\Controls\Group::hasMargin — Detecção de margem

### Descrição

public function **UI\Controls\Group::hasMargin**(): [bool](language.types.boolean.md)

Detecta se este grupo tem uma margem.

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
