# Caminho de desenho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-path.php

---

# Caminho de desenho

(UI 0.9.9)

## Introdução

Um caminho de desenho guia uma caneta de desenho, informando à caneta onde desenhar em uma área.

## Resumo da classe

class **UI\Draw\Path**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Winding](class.ui-draw-path.md#ui-draw-path.constants.winding);

const
[int](language.types.integer.md)
[Alternate](class.ui-draw-path.md#ui-draw-path.constants.alternate);

/\* Constructor \*/

public function [\_\_construct](ui-draw-path.construct.md)([int](language.types.integer.md) `$mode` = UI\Draw\Path::Winding)

/\* Métodos \*/

public function [addRectangle](ui-draw-path.addrectangle.md)([UI\Point](class.ui-point.md) `$point`, [UI\Size](class.ui-size.md) `$size`)

public function [arcTo](ui-draw-path.arcto.md)(  
    [UI\Point](class.ui-point.md) `$point`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$angle`,  
    [float](language.types.float.md) `$sweep`,  
    [float](language.types.float.md) `$negative`  
)

public function [bezierTo](ui-draw-path.bezierto.md)(  
    [UI\Point](class.ui-point.md) `$point`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$angle`,  
    [float](language.types.float.md) `$sweep`,  
    [float](language.types.float.md) `$negative`  
)

public function [closeFigure](ui-draw-path.closefigure.md)()

public function [end](ui-draw-path.end.md)()

public function [lineTo](ui-draw-path.lineto.md)(  
    [UI\Point](class.ui-point.md) `$point`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$angle`,  
    [float](language.types.float.md) `$sweep`,  
    [float](language.types.float.md) `$negative`  
)

public function [newFigure](ui-draw-path.newfigure.md)([UI\Point](class.ui-point.md) `$point`)

public function [newFigureWithArc](ui-draw-path.newfigurewitharc.md)(  
    [UI\Point](class.ui-point.md) `$point`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$angle`,  
    [float](language.types.float.md) `$sweep`,  
    [float](language.types.float.md) `$negative`  
)

}

## Constantes predefinidas

**`UI\Draw\Path::Winding`**
:   Este é o modo padrão de caminho de desenho.

**`UI\Draw\Path::Alternate`**
:   Este é o modo alternativo de caminho de desenho.

## Índice

- [UI\Draw\Path::addRectangle](ui-draw-path.addrectangle.md) — Desenha um retângulo
- [UI\Draw\Path::arcTo](ui-draw-path.arcto.md) — Desenha um arco
- [UI\Draw\Path::bezierTo](ui-draw-path.bezierto.md) — Desenha um curva de Bézier
- [UI\Draw\Path::closeFigure](ui-draw-path.closefigure.md) — Fecha figura
- [UI\Draw\Path::\_\_construct](ui-draw-path.construct.md) — Constrói um novo caminho
- [UI\Draw\Path::end](ui-draw-path.end.md) — Finaliza caminho
- [UI\Draw\Path::lineTo](ui-draw-path.lineto.md) — Desenha uma linha
- [UI\Draw\Path::newFigure](ui-draw-path.newfigure.md) — Desenha figura
- [UI\Draw\Path::newFigureWithArc](ui-draw-path.newfigurewitharc.md) — Desenha figura com arco

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
