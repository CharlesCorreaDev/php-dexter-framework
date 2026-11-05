# Define texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-editablecombo.settext.php

---

# UI\Controls\EditableCombo::setText

(UI 0.9.9)

UI\Controls\EditableCombo::setText — Define texto

### Descrição

public function **UI\Controls\EditableCombo::setText**([string](language.types.string.md) `$text`)

Define o texto da opção atualmente selecionada nesta caixa combinada editável.

### Parâmetros

`text`
:   O novo texto.

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
