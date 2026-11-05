# Obtém valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-progress.getvalue.php

---

# UI\Controls\Progress::getValue

(UI 0.9.9)

UI\Controls\Progress::getValue — Obtém valor

### Descrição

public function **UI\Controls\Progress::getValue**(): [int](language.types.integer.md)

Recupera o valor atual desta barra de progresso.

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
