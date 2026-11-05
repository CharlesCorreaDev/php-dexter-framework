# Define texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-entry.settext.php

---

# UI\Controls\Entry::setText

(UI 0.9.9)

UI\Controls\Entry::setText — Define texto

### Descrição

public function **UI\Controls\Entry::setText**([string](language.types.string.md) `$text`)

Define o texto para esta entrada.

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
