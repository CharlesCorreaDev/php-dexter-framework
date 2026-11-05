# Pincéis de gradientes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-brush-gradient.php

---

# Pincéis de gradientes

(UI 2.0.0)

## Introdução

Classe abstrada para pincéis de gradientes.

## Resumo da classe

abstract
class **UI\Draw\Brush\Gradient**

extends
[UI\Draw\Brush](class.ui-draw-brush.md)
{

/\* Métodos \*/

public function [addStop](ui-draw-brush-gradient.addstop.md)([float](language.types.float.md) `$position`, [UI\Draw\Color](class.ui-draw-color.md) `$color`): [int](language.types.integer.md)

public function [addStop](ui-draw-brush-gradient.addstop.md)([float](language.types.float.md) `$position`, [int](language.types.integer.md) `$color`): [int](language.types.integer.md)

public function [delStop](ui-draw-brush-gradient.delstop.md)([int](language.types.integer.md) `$index`): [int](language.types.integer.md)

public function [setStop](ui-draw-brush-gradient.setstop.md)([int](language.types.integer.md) `$index`, [float](language.types.float.md) `$position`, [UI\Draw\Color](class.ui-draw-color.md) `$color`): [bool](language.types.boolean.md)

public function [setStop](ui-draw-brush-gradient.setstop.md)([int](language.types.integer.md) `$index`, [float](language.types.float.md) `$position`, [int](language.types.integer.md) `$color`): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [UI\Draw\Brush::getColor](ui-draw-brush.getcolor.md)(): [UI\Draw\Color](class.ui-draw-color.md)

public function [UI\Draw\Brush::setColor](ui-draw-brush.setcolor.md)([UI\Draw\Color](class.ui-draw-color.md) `$color`): [void](language.types.void.md)

public function [UI\Draw\Brush::setColor](ui-draw-brush.setcolor.md)([int](language.types.integer.md) `$color`): [void](language.types.void.md)

}

## Índice

- [UI\Draw\Brush\Gradient::addStop](ui-draw-brush-gradient.addstop.md) — Adiciona parada
- [UI\Draw\Brush\Gradient::delStop](ui-draw-brush-gradient.delstop.md) — Remove parada
- [UI\Draw\Brush\Gradient::setStop](ui-draw-brush-gradient.setstop.md) — Define parada

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
