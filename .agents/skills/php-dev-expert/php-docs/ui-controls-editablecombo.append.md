# Anexa opção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-editablecombo.append.php

---

# UI\Controls\EditableCombo::append

(UI 0.9.9)

UI\Controls\EditableCombo::append — Anexa opção

### Descrição

public function **UI\Controls\EditableCombo::append**([string](language.types.string.md) `$text`)

Anexa uma nova opção a esta caixa combinada editável.

### Parâmetros

`text`
:   O texto para a nova opção.

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
