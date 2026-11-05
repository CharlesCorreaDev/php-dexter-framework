# Preenche um caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-pen.fill.php

---

# UI\Draw\Pen::fill

(UI 0.9.9)

UI\Draw\Pen::fill — Preenche um caminho

### Descrição

public function **UI\Draw\Pen::fill**([UI\Draw\Path](class.ui-draw-path.md) `$path`, [UI\Draw\Brush](class.ui-draw-brush.md) `$with`)

public function **UI\Draw\Pen::fill**([UI\Draw\Path](class.ui-draw-path.md) `$path`, [UI\Draw\Color](class.ui-draw-color.md) `$with`)

public function **UI\Draw\Pen::fill**([UI\Draw\Path](class.ui-draw-path.md) `$path`, [int](language.types.integer.md) `$with`)

Preenche o caminho informado.

### Parâmetros

`path`
:   O caminho a preencher.

`with`
:   A cor ou um pincel com o qual o caminho será preenchido.

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
