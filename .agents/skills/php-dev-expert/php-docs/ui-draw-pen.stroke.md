# Traça um caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-pen.stroke.php

---

# UI\Draw\Pen::stroke

(UI 0.9.9)

UI\Draw\Pen::stroke — Traça um caminho

### Descrição

public function **UI\Draw\Pen::stroke**([UI\Draw\Path](class.ui-draw-path.md) `$path`, [UI\Draw\Brush](class.ui-draw-brush.md) `$with`, [UI\Draw\Stroke](class.ui-draw-stroke.md) `$stroke`)

public function **UI\Draw\Pen::stroke**([UI\Draw\Path](class.ui-draw-path.md) `$path`, [UI\Draw\Color](class.ui-draw-color.md) `$with`, [UI\Draw\Stroke](class.ui-draw-stroke.md) `$stroke`)

public function **UI\Draw\Pen::stroke**([UI\Draw\Path](class.ui-draw-path.md) `$path`, [int](language.types.integer.md) `$with`, [UI\Draw\Stroke](class.ui-draw-stroke.md) `$stroke`)

Traça o caminho informado.

### Parâmetros

`path`
:   O caminho a traçar.

`with`
:   A cor ou o pincel para traçar o caminho.

`stroke`
:   A configuração do traço.

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
