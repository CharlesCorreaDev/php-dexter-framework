# Desenha figura com arco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-path.newfigurewitharc.php

---

# UI\Draw\Path::newFigureWithArc

(UI 0.9.9)

UI\Draw\Path::newFigureWithArc — Desenha figura com arco

### Descrição

public function **UI\Draw\Path::newFigureWithArc**(  
    [UI\Point](class.ui-point.md) `$point`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$angle`,  
    [float](language.types.float.md) `$sweep`,  
    [float](language.types.float.md) `$negative`  
)

### Parâmetros

`point`

`radius`

`angle`

`sweep`

`negative`

### Valor Retornado

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
