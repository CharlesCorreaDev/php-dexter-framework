# Muda o status da caixa de verificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-check.setchecked.php

---

# UI\Controls\Check::setChecked

(UI 0.9.9)

UI\Controls\Check::setChecked — Muda o status da caixa de verificação

### Descrição

public function **UI\Controls\Check::setChecked**([bool](language.types.boolean.md) `$checked`)

Muda o status da caixa de verificação.

### Parâmetros

`checked`
:   O novo status.

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
