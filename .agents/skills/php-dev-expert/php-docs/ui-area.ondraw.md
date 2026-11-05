# Função de retorno de desenho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-area.ondraw.php

---

# UI\Area::onDraw

(UI 0.9.9)

UI\Area::onDraw — Função de retorno de desenho

### Descrição

protected function **UI\Area::onDraw**(  
    [UI\Draw\Pen](class.ui-draw-pen.md) `$pen`,  
    [UI\Size](class.ui-size.md) `$areaSize`,  
    [UI\Point](class.ui-point.md) `$clipPoint`,  
    [UI\Size](class.ui-size.md) `$clipSize`  
)

Deve ser invocado quando a área precisar ser redesenhada.

### Parâmetros

`pen`
:   Uma Pen adequada para desenho nesta área.

`areaSize`
:   A dimensão da área.

`clipPoint`
:   O ponto de corte da área.

`clipSize`
:   A dimensão de recorte da área.

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
