# Manipulador de seleção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-radio.onselected.php

---

# UI\Controls\Radio::onSelected

(UI 0.9.9)

UI\Controls\Radio::onSelected — Manipulador de seleção

### Descrição

protected function **UI\Controls\Radio::onSelected**()

Executado quando a opção selecionada neste grupo de botões de rádio é alterada.

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
