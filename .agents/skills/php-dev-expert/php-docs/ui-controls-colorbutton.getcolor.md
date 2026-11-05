# Obtém a cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-colorbutton.getcolor.php

---

# UI\Controls\ColorButton::getColor

(UI 0.9.9)

UI\Controls\ColorButton::getColor — Obtém a cor

### Descrição

public function **UI\Controls\ColorButton::getColor**(): UI\Color

Recupera a cor atualmente selecionada.

### Parâmetros

Esta função não possui parâmetros.

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
