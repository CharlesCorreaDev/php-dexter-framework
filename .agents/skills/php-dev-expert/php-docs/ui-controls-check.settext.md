# Define o texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-check.settext.php

---

# UI\Controls\Check::setText

(UI 0.9.9)

UI\Controls\Check::setText — Define o texto

### Descrição

public function **UI\Controls\Check::setText**([string](language.types.string.md) `$text`)

Define o texto (rótulo) para esta caixa de verificação.

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
