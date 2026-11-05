# Detecção de caixa marcada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-check.ischecked.php

---

# UI\Controls\Check::isChecked

(UI 0.9.9)

UI\Controls\Check::isChecked — Detecção de caixa marcada

### Descrição

public function **UI\Controls\Check::isChecked**(): [bool](language.types.boolean.md)

Detecta o status desta caixa de verificação.

### Parâmetros

Esta função não possui parâmetros.

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
