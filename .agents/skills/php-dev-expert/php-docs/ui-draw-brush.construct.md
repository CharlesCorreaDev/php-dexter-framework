# Constrói um novo pincel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-brush.construct.php

---

# UI\Draw\Brush::\_\_construct

(UI 0.9.9)

UI\Draw\Brush::\_\_construct — Constrói um novo pincel

### Descrição

public function **UI\Draw\Brush::\_\_construct**([UI\Draw\Color](class.ui-draw-color.md) `$color`)

public function **UI\Draw\Brush::\_\_construct**([int](language.types.integer.md) `$color`)

Constrói um pincel sólido usando a cor informada

### Parâmetros

`color`
:   Pode ser um objeto UI\Draw\Color ou no formato RRGGBBAA.

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
