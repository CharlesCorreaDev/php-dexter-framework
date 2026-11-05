# Define cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-brush.setcolor.php

---

# UI\Draw\Brush::setColor

(UI 0.9.9)

UI\Draw\Brush::setColor — Define cor

### Descrição

public function **UI\Draw\Brush::setColor**([UI\Draw\Color](class.ui-draw-color.md) `$color`): [void](language.types.void.md)

public function **UI\Draw\Brush::setColor**([int](language.types.integer.md) `$color`): [void](language.types.void.md)

Define a cor deste pincel para a cor informada.

### Parâmetros

`color`
:   Pode ser um UI\Draw\Color ou no formato RRGGBBAA.

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
