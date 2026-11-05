# Obtém valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-slider.getvalue.php

---

# UI\Controls\Slider::getValue

(UI 0.9.9)

UI\Controls\Slider::getValue — Obtém valor

### Descrição

public function **UI\Controls\Slider::getValue**(): [int](language.types.integer.md)

Obtém o valor deste controle deslizante.

### Parâmetros

Esta função não possui parâmetros.

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
