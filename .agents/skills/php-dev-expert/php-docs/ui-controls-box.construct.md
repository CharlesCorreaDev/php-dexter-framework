# Constrói uma nova caixa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-box.construct.php

---

# UI\Controls\Box::\_\_construct

(UI 0.9.9)

UI\Controls\Box::\_\_construct — Constrói uma nova caixa

### Descrição

public function **UI\Controls\Box::\_\_construct**([int](language.types.integer.md) `$orientation` = UI\Controls\Box::Horizontal)

Constrói uma nova caixa.

### Parâmetros

`orientation`
:   Box::Horizontal ou Box::Vertical

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
