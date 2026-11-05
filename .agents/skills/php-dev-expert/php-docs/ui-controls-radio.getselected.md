# Obtém opção selecionada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-radio.getselected.php

---

# UI\Controls\Radio::getSelected

(UI 0.9.9)

UI\Controls\Radio::getSelected — Obtém opção selecionada

### Descrição

public function **UI\Controls\Radio::getSelected**(): [int](language.types.integer.md)

Recupera o índice da opção atualmente selecionada neste grupo de botões de rádio.

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
