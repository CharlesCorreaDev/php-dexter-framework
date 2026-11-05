# Define valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-progress.setvalue.php

---

# UI\Controls\Progress::setValue

(UI 0.9.9)

UI\Controls\Progress::setValue — Define valor

### Descrição

public function **UI\Controls\Progress::setValue**([int](language.types.integer.md) `$value`)

Define o valor para esta barra de progresso.

### Parâmetros

`value`
:   Um inteiro entre 0 e 100 (inclusive).

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
