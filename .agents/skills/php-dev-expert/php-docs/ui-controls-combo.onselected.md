# Manipulador de seleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-combo.onselected.php

---

# UI\Controls\Combo::onSelected

(UI 0.9.9)

UI\Controls\Combo::onSelected — Manipulador de seleção

### Descrição

protected function **UI\Controls\Combo::onSelected**()

Executada quando uma opção é selecionada nesta caixa combinada.

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
