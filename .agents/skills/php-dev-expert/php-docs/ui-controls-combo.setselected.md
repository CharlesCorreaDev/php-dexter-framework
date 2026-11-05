# Define opção selecionada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-combo.setselected.php

---

# UI\Controls\Combo::setSelected

(UI 0.9.9)

UI\Controls\Combo::setSelected — Define opção selecionada

### Descrição

public function **UI\Controls\Combo::setSelected**([int](language.types.integer.md) `$index`)

Define a opção atualmente selecionada nesta caixa combinada.

### Parâmetros

`index`
:   O índice da opção a selecionar.

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
