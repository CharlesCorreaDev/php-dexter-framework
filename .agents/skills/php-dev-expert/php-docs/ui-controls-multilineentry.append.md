# Anexa texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-multilineentry.append.php

---

# UI\Controls\MultilineEntry::append

(UI 0.9.9)

UI\Controls\MultilineEntry::append — Anexa texto

### Descrição

public function **UI\Controls\MultilineEntry::append**([string](language.types.string.md) `$text`)

Anexa o texto informado ao texto nesta entrada multilinhas.

### Parâmetros

`text`
:   O texto a anexar.

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
