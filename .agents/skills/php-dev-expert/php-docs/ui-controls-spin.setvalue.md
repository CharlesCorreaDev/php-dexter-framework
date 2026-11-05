# Define valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-spin.setvalue.php

---

# UI\Controls\Spin::setValue

(UI 0.9.9)

UI\Controls\Spin::setValue — Define valor

### Descrição

public function **UI\Controls\Spin::setValue**([int](language.types.integer.md) `$value`)

Define o valor nesta caixa de giro.

### Parâmetros

`value`
:   O novo valor.

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
