# Pincéis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-brush.php

---

# Pincéis

(UI 0.9.9)

## Introdução

Representa um pincel de cor sólida.

## Resumo da classe

class **UI\Draw\Brush**
{

/\* Constructor \*/

public function [\_\_construct](ui-draw-brush.construct.md)([UI\Draw\Color](class.ui-draw-color.md) `$color`)

public function [\_\_construct](ui-draw-brush.construct.md)([int](language.types.integer.md) `$color`)

/\* Métodos \*/

public function [getColor](ui-draw-brush.getcolor.md)(): [UI\Draw\Color](class.ui-draw-color.md)

public function [setColor](ui-draw-brush.setcolor.md)([UI\Draw\Color](class.ui-draw-color.md) `$color`): [void](language.types.void.md)

public function [setColor](ui-draw-brush.setcolor.md)([int](language.types.integer.md) `$color`): [void](language.types.void.md)

}

## Índice

- [UI\Draw\Brush::\_\_construct](ui-draw-brush.construct.md) — Constrói um novo pincel
- [UI\Draw\Brush::getColor](ui-draw-brush.getcolor.md) — Obtém cor
- [UI\Draw\Brush::setColor](ui-draw-brush.setcolor.md) — Define cor

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
