# Matriz de desenho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-matrix.php

---

# Matriz de desenho

(UI 0.9.9)

## Introdução

## Resumo da classe

class **UI\Draw\Matrix**
{

/\* Métodos \*/

public function [invert](ui-draw-matrix.invert.md)()

public function [isInvertible](ui-draw-matrix.isinvertible.md)(): [bool](language.types.boolean.md)

public function [multiply](ui-draw-matrix.multiply.md)([UI\Draw\Matrix](class.ui-draw-matrix.md) `$matrix`): [UI\Draw\Matrix](class.ui-draw-matrix.md)

public function [rotate](ui-draw-matrix.rotate.md)([UI\Point](class.ui-point.md) `$point`, [float](language.types.float.md) `$amount`)

public function [scale](ui-draw-matrix.scale.md)([UI\Point](class.ui-point.md) `$center`, [UI\Point](class.ui-point.md) `$point`)

public function [skew](ui-draw-matrix.skew.md)([UI\Point](class.ui-point.md) `$point`, [UI\Point](class.ui-point.md) `$amount`)

public function [translate](ui-draw-matrix.translate.md)([UI\Point](class.ui-point.md) `$point`)

}

## Índice

- [UI\Draw\Matrix::invert](ui-draw-matrix.invert.md) — Inverte matriz
- [UI\Draw\Matrix::isInvertible](ui-draw-matrix.isinvertible.md) — Detecção de invertibilidade
- [UI\Draw\Matrix::multiply](ui-draw-matrix.multiply.md) — Multiplica matriz
- [UI\Draw\Matrix::rotate](ui-draw-matrix.rotate.md) — Rotaciona matriz
- [UI\Draw\Matrix::scale](ui-draw-matrix.scale.md) — Escala matriz
- [UI\Draw\Matrix::skew](ui-draw-matrix.skew.md) — Inclina matriz
- [UI\Draw\Matrix::translate](ui-draw-matrix.translate.md) — Traslada matriz

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
