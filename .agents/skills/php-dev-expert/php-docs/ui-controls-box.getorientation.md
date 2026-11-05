# Obtém orientação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-box.getorientation.php

---

# UI\Controls\Box::getOrientation

(UI 0.9.9)

UI\Controls\Box::getOrientation — Obtém orientação

### Descrição

public function **UI\Controls\Box::getOrientation**(): [int](language.types.integer.md)

Recupera a orientação desta caixa.

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
