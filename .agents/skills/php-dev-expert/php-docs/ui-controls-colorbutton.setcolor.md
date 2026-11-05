# Define a cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-colorbutton.setcolor.php

---

# UI\Controls\ColorButton::setColor

(UI 0.9.9)

UI\Controls\ColorButton::setColor — Define a cor

### Descrição

public function **UI\Controls\ColorButton::setColor**([UI\Draw\Color](class.ui-draw-color.md) `$color`)

public function **UI\Controls\ColorButton::setColor**([int](language.types.integer.md) `$color`)

Define a cor atualmente selecionada.

### Parâmetros

`color`
:   A nova cor.

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
