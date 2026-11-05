# Obtém a opção selecionada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-combo.getselected.php

---

# UI\Controls\Combo::getSelected

(UI 0.9.9)

UI\Controls\Combo::getSelected — Obtém a opção selecionada

### Descrição

public function **UI\Controls\Combo::getSelected**(): [int](language.types.integer.md)

Recupera o índice da opção selecionada nesta caixa combinada.

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
