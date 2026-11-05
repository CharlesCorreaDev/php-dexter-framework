# Caneta de desenho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-pen.php

---

# Caneta de desenho

(UI 0.9.9)

## Introdução

A caneta é passada ao manipulador de eventos de desenho da área, e é usada para recorte, preenchimento, traço e escrita em caminhos de desenho.

## Resumo da classe

final
class **UI\Draw\Pen**
{

/\* Métodos \*/

public function [clip](ui-draw-pen.clip.md)([UI\Draw\Path](class.ui-draw-path.md) `$path`)

public function [fill](ui-draw-pen.fill.md)([UI\Draw\Path](class.ui-draw-path.md) `$path`, [UI\Draw\Brush](class.ui-draw-brush.md) `$with`)

public function [fill](ui-draw-pen.fill.md)([UI\Draw\Path](class.ui-draw-path.md) `$path`, [UI\Draw\Color](class.ui-draw-color.md) `$with`)

public function [fill](ui-draw-pen.fill.md)([UI\Draw\Path](class.ui-draw-path.md) `$path`, [int](language.types.integer.md) `$with`)

public function [restore](ui-draw-pen.restore.md)()

public function [save](ui-draw-pen.save.md)()

public function [stroke](ui-draw-pen.stroke.md)([UI\Draw\Path](class.ui-draw-path.md) `$path`, [UI\Draw\Brush](class.ui-draw-brush.md) `$with`, [UI\Draw\Stroke](class.ui-draw-stroke.md) `$stroke`)

public function [stroke](ui-draw-pen.stroke.md)([UI\Draw\Path](class.ui-draw-path.md) `$path`, [UI\Draw\Color](class.ui-draw-color.md) `$with`, [UI\Draw\Stroke](class.ui-draw-stroke.md) `$stroke`)

public function [stroke](ui-draw-pen.stroke.md)([UI\Draw\Path](class.ui-draw-path.md) `$path`, [int](language.types.integer.md) `$with`, [UI\Draw\Stroke](class.ui-draw-stroke.md) `$stroke`)

public function [transform](ui-draw-pen.transform.md)([UI\Draw\Matrix](class.ui-draw-matrix.md) `$matrix`)

public function [write](ui-draw-pen.write.md)([UI\Point](class.ui-point.md) `$point`, [UI\Draw\Text\Layout](class.ui-draw-text-layout.md) `$layout`)

}

## Índice

- [UI\Draw\Pen::clip](ui-draw-pen.clip.md) — Recorta um caminho
- [UI\Draw\Pen::fill](ui-draw-pen.fill.md) — Preenche um caminho
- [UI\Draw\Pen::restore](ui-draw-pen.restore.md) — Restaura
- [UI\Draw\Pen::save](ui-draw-pen.save.md) — Salva
- [UI\Draw\Pen::stroke](ui-draw-pen.stroke.md) — Traça um caminho
- [UI\Draw\Pen::transform](ui-draw-pen.transform.md) — Transforma matriz
- [UI\Draw\Pen::write](ui-draw-pen.write.md) — Desenha texto em um ponto

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
