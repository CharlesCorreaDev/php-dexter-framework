# Desenha um curva de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-path.bezierto.php

---

# UI\Draw\Path::bezierTo

(UI 0.9.9)

UI\Draw\Path::bezierTo — Desenha um curva de Bézier

### Descrição

public function **UI\Draw\Path::bezierTo**(  
    [UI\Point](class.ui-point.md) `$point`,  
    [float](language.types.float.md) `$radius`,  
    [float](language.types.float.md) `$angle`,  
    [float](language.types.float.md) `$sweep`,  
    [float](language.types.float.md) `$negative`  
)

Desenha um curva de Bézier.

### Parâmetros

`point`
:   O ponto onde o mapeamento inicia.

`radius`
:   O raio da curva.

`angle`
:   O ângulo da curva.

`sweep`
:   A varredura da curva.

`negative`

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
