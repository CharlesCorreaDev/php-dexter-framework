# Define texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-label.settext.php

---

# UI\Controls\Label::setText

(UI 0.9.9)

UI\Controls\Label::setText — Define texto

### Descrição

public function **UI\Controls\Label::setText**([string](language.types.string.md) `$text`)

Define o texto para este rótulo.

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
