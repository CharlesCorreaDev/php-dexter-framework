# Representa um leiaute de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-text-layout.php

---

# Representa um leiaute de texto

(UI 0.9.9)

## Introdução

Representa o leiaute de texto que pode ser desenhado por uma caneta.

## Resumo da classe

class **UI\Draw\Text\Layout**
{

/\* Constructor \*/

public function [\_\_construct](ui-draw-text-layout.construct.md)([string](language.types.string.md) `$text`, [UI\Draw\Text\Font](class.ui-draw-text-font.md) `$font`, [float](language.types.float.md) `$width`)

/\* Métodos \*/

public function [setColor](ui-draw-text-layout.setcolor.md)([UI\Draw\Color](class.ui-draw-color.md) `$color`, [int](language.types.integer.md) `$start` = 0, [int](language.types.integer.md) `$end` = ?)

public function [setColor](ui-draw-text-layout.setcolor.md)([int](language.types.integer.md) `$color`, [int](language.types.integer.md) `$start` = 0, [int](language.types.integer.md) `$end` = ?)

public function [setWidth](ui-draw-text-layout.setwidth.md)([float](language.types.float.md) `$width`)

}

## Índice

- [UI\Draw\Text\Layout::\_\_construct](ui-draw-text-layout.construct.md) — Constrói um novo leiaute de texto
- [UI\Draw\Text\Layout::setColor](ui-draw-text-layout.setcolor.md) — Define cor
- [UI\Draw\Text\Layout::setWidth](ui-draw-text-layout.setwidth.md) — Define largura

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
