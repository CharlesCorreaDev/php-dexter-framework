# Constrói uma nova entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-entry.construct.php

---

# UI\Controls\Entry::\_\_construct

(UI 0.9.9)

UI\Controls\Entry::\_\_construct — Constrói uma nova entrada

### Descrição

public function **UI\Controls\Entry::\_\_construct**([int](language.types.integer.md) `$type` = UI\Controls\Entry::Normal)

Constrói uma nova entrada do tipo informado.

### Parâmetros

`type`
:   Entry::Normal, Entry::Password ou Entry::Search

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
