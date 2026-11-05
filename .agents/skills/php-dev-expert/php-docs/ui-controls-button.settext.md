# Define o texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-button.settext.php

---

# UI\Controls\Button::setText

(UI 0.9.9)

UI\Controls\Button::setText — Define o texto

### Descrição

public function **UI\Controls\Button::setText**([string](language.types.string.md) `$text`)

Define o texto (rótulo) para este botão.

### Parâmetros

`text`
:   O novo texto (rótulo).

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
