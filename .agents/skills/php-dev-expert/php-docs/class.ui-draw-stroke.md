# Traço de desenho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-stroke.php

---

# Traço de desenho

(UI 0.9.9)

## Introdução

Contém a configuração para a caneta realizar um traço.

## Resumo da classe

class **UI\Draw\Stroke**
{

/\* Constructor \*/

public function [\_\_construct](ui-draw-stroke.construct.md)(  
    [int](language.types.integer.md) `$cap` = UI\Draw\Line\Cap::Flat,  
    [int](language.types.integer.md) `$join` = UI\Draw\Line\Join::Miter,  
    [float](language.types.float.md) `$thickness` = 1,  
    [float](language.types.float.md) `$miterLimit` = 10  
)

/\* Métodos \*/

public function [getCap](ui-draw-stroke.getcap.md)(): [int](language.types.integer.md)

public function [getJoin](ui-draw-stroke.getjoin.md)(): [int](language.types.integer.md)

public function [getMiterLimit](ui-draw-stroke.getmiterlimit.md)(): [float](language.types.float.md)

public function [getThickness](ui-draw-stroke.getthickness.md)(): [float](language.types.float.md)

public function [setCap](ui-draw-stroke.setcap.md)([int](language.types.integer.md) `$cap`)

public function [setJoin](ui-draw-stroke.setjoin.md)([int](language.types.integer.md) `$join`)

public function [setMiterLimit](ui-draw-stroke.setmiterlimit.md)([float](language.types.float.md) `$limit`)

public function [setThickness](ui-draw-stroke.setthickness.md)([float](language.types.float.md) `$thickness`)

}

## Índice

- [UI\Draw\Stroke::\_\_construct](ui-draw-stroke.construct.md) — Constrói um traço
- [UI\Draw\Stroke::getCap](ui-draw-stroke.getcap.md) — Obtém extremidade de linha
- [UI\Draw\Stroke::getJoin](ui-draw-stroke.getjoin.md) — Obtém junção de linha
- [UI\Draw\Stroke::getMiterLimit](ui-draw-stroke.getmiterlimit.md) — Obtém limite de junção aguda
- [UI\Draw\Stroke::getThickness](ui-draw-stroke.getthickness.md) — Obtém espessura
- [UI\Draw\Stroke::setCap](ui-draw-stroke.setcap.md) — Define extremidade de linha
- [UI\Draw\Stroke::setJoin](ui-draw-stroke.setjoin.md) — Define junção de linha
- [UI\Draw\Stroke::setMiterLimit](ui-draw-stroke.setmiterlimit.md) — Define limite de junção aguda
- [UI\Draw\Stroke::setThickness](ui-draw-stroke.setthickness.md) — Define espessura

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
