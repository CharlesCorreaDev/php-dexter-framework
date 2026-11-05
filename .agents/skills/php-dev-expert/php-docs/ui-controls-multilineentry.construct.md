# Constrói uma nova entrada multilinhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-multilineentry.construct.php

---

# UI\Controls\MultilineEntry::\_\_construct

(UI 0.9.9)

UI\Controls\MultilineEntry::\_\_construct — Constrói uma nova entrada multilinhas

### Descrição

public function **UI\Controls\MultilineEntry::\_\_construct**([int](language.types.integer.md) `$type` = ?)

Constrói uma nova entrada multilinhas do tipo informado.

### Parâmetros

`type`
:   MultilineEntry::Wrap ou MultilineEntry::NoWrap.

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
