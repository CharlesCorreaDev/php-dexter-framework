# Obtém cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-brush.getcolor.php

---

# UI\Draw\Brush::getColor

(UI 0.9.9)

UI\Draw\Brush::getColor — Obtém cor

### Descrição

public function **UI\Draw\Brush::getColor**(): [UI\Draw\Color](class.ui-draw-color.md)

Retorna um UI\Draw\Color representando a cor para este pincel.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A cor atual do pincel.

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
