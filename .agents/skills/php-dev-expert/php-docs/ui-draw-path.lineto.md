# Desenha uma linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-path.lineto.php

---

# UI\Draw\Path::lineTo

(UI 0.9.9)

UI\Draw\Path::lineTo — Desenha uma linha

### Descrição

public function **UI\Draw\Path::lineTo**(  
    [UI\Point](class.ui-point.md) `$point`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$angle`,  
    [float](language.types.float.md) `$sweep`,  
    [float](language.types.float.md) `$negative`  
)

Mapeia o caminho para uma linha.

### Parâmetros

`point`
:   O ponto de início do mapeamento.

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
