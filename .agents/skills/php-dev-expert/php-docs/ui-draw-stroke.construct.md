# Constrói um traço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-stroke.construct.php

---

# UI\Draw\Stroke::\_\_construct

(UI 0.9.9)

UI\Draw\Stroke::\_\_construct — Constrói um traço

### Descrição

public function **UI\Draw\Stroke::\_\_construct**(  
    [int](language.types.integer.md) `$cap` = UI\Draw\Line\Cap::Flat,  
    [int](language.types.integer.md) `$join` = UI\Draw\Line\Join::Miter,  
    [float](language.types.float.md) `$thickness` = 1,  
    [float](language.types.float.md) `$miterLimit` = 10  
)

Constrói um novo traço.

### Parâmetros

`cap`
:   UI\Draw\Line\Cap::Flat, UI\Draw\Line\Cap::Round ou UI\Draw\Line\Cap::Square.

`join`
:   UI\Draw\Line\Join::Miter, UI\Draw\Line\Join::Round ou UI\Draw\Line\Join::Bevel.

`thickness`
:   A espessura do traço.

`miterLimit`
:   Limite de junção aguda (padrão é sensível para todas as plataformas suportadas).

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
