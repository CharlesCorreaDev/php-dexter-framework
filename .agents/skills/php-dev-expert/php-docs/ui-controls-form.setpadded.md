# Define preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-form.setpadded.php

---

# UI\Controls\Form::setPadded

(UI 0.9.9)

UI\Controls\Form::setPadded — Define preenchimento

### Descrição

public function **UI\Controls\Form::setPadded**([bool](language.types.boolean.md) `$padded`)

Habilita ou desabilita preenchimento neste formulário.

### Parâmetros

`padded`

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
