# Anexa opção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-combo.append.php

---

# UI\Controls\Combo::append

(UI 0.9.9)

UI\Controls\Combo::append — Anexa opção

### Descrição

public function **UI\Controls\Combo::append**([string](language.types.string.md) `$text`)

Anexa uma opção a esta caixa combinada.

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
