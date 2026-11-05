# Detecção de margem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-tab.hasmargin.php

---

# UI\Controls\Tab::hasMargin

(UI 0.9.9)

UI\Controls\Tab::hasMargin — Detecção de margem

### Descrição

public function **UI\Controls\Tab::hasMargin**([int](language.types.integer.md) `$page`): [bool](language.types.boolean.md)

Detecta se a página informada tem uma margem.

### Parâmetros

`page`
:   O índice da página.

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
