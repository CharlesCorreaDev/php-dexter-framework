# Constrói um novo botão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-button.construct.php

---

# UI\Controls\Button::\_\_construct

(UI 0.9.9)

UI\Controls\Button::\_\_construct — Constrói um novo botão

### Descrição

public function **UI\Controls\Button::\_\_construct**([string](language.types.string.md) `$text`)

Constrói um novo botão.

### Parâmetros

`text`
:   O texto (rótulo) para este botão.

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
