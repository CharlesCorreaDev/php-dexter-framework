# Define título

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-group.settitle.php

---

# UI\Controls\Group::setTitle

(UI 0.9.9)

UI\Controls\Group::setTitle — Define título

### Descrição

public function **UI\Controls\Group::setTitle**([string](language.types.string.md) `$title`)

Define o título para este grupo.

### Parâmetros

`title`
:   O texto para o novo título.

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
