# Manipulador de alteração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-slider.onchange.php

---

# UI\Controls\Slider::onChange

(UI 0.9.9)

UI\Controls\Slider::onChange — Manipulador de alteração

### Descrição

protected function **UI\Controls\Slider::onChange**()

Executado quando o valor deste controle deslizante é alterado.

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
