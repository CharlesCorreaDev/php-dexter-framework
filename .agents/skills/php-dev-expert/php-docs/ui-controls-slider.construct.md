# Constrói um novo controle deslizante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-slider.construct.php

---

# UI\Controls\Slider::\_\_construct

(UI 0.9.9)

UI\Controls\Slider::\_\_construct — Constrói um novo controle deslizante

### Descrição

public function **UI\Controls\Slider::\_\_construct**([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`)

Constrói um novo controle deslizante com a faixa informada.

### Parâmetros

`min`
:   O mínimo valor permitido.

`max`
:   O máximo valor permitido.

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
