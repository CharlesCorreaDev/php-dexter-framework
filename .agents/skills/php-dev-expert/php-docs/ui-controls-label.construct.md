# Constrói um novo rótulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-label.construct.php

---

# UI\Controls\Label::\_\_construct

(UI 0.9.9)

UI\Controls\Label::\_\_construct — Constrói um novo rótulo

### Descrição

public function **UI\Controls\Label::\_\_construct**([string](language.types.string.md) `$text`)

Constrói um novo rótulo.

### Parâmetros

`text`
:   O texto para o rótulo.

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
