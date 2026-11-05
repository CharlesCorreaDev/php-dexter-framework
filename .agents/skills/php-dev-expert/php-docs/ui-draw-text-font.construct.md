# Constrói uma nova fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font.construct.php

---

# UI\Draw\Text\Font::\_\_construct

(UI 0.9.9)

UI\Draw\Text\Font::\_\_construct — Constrói uma nova fonte

### Descrição

public function **UI\Draw\Text\Font::\_\_construct**([UI\Draw\Text\Font\Descriptor](class.ui-draw-text-font-descriptor.md) `$descriptor`)

Constrói uma nova fonte usando o descrito fornecido.

### Parâmetros

`descriptor`
:   O descritor para a fonte.

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
