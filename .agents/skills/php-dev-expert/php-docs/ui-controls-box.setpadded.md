# Define o preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-box.setpadded.php

---

# UI\Controls\Box::setPadded

(UI 0.9.9)

UI\Controls\Box::setPadded — Define o preenchimento

### Descrição

public function **UI\Controls\Box::setPadded**([bool](language.types.boolean.md) `$padded`)

Habilita ou desabilita o preenchimento nesta caixa.

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
