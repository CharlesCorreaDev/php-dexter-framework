# Gradiente radial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-brush-radialgradient.php

---

# Gradiente radial

(UI 2.0.0)

## Introdução

## Resumo da classe

class **UI\Draw\Brush\RadialGradient**

extends
[UI\Draw\Brush\Gradient](class.ui-draw-brush-gradient.md)
{

/\* Constructor \*/

public function [\_\_construct](ui-draw-brush-radialgradient.construct.md)([UI\Point](class.ui-point.md) `$start`, [UI\Point](class.ui-point.md) `$outer`, [float](language.types.float.md) `$radius`)

/\* Métodos herdados \*/

public function [UI\Draw\Brush\Gradient::addStop](ui-draw-brush-gradient.addstop.md)([float](language.types.float.md) `$position`, [UI\Draw\Color](class.ui-draw-color.md) `$color`): [int](language.types.integer.md)

public function [UI\Draw\Brush\Gradient::addStop](ui-draw-brush-gradient.addstop.md)([float](language.types.float.md) `$position`, [int](language.types.integer.md) `$color`): [int](language.types.integer.md)

public function [UI\Draw\Brush\Gradient::delStop](ui-draw-brush-gradient.delstop.md)([int](language.types.integer.md) `$index`): [int](language.types.integer.md)

public function [UI\Draw\Brush\Gradient::setStop](ui-draw-brush-gradient.setstop.md)([int](language.types.integer.md) `$index`, [float](language.types.float.md) `$position`, [UI\Draw\Color](class.ui-draw-color.md) `$color`): [bool](language.types.boolean.md)

public function [UI\Draw\Brush\Gradient::setStop](ui-draw-brush-gradient.setstop.md)([int](language.types.integer.md) `$index`, [float](language.types.float.md) `$position`, [int](language.types.integer.md) `$color`): [bool](language.types.boolean.md)

}

## Índice

- [UI\Draw\Brush\RadialGradient::\_\_construct](ui-draw-brush-radialgradient.construct.md) — Constrói um gradiente radial

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
