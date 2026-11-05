# Anexa página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-tab.append.php

---

# UI\Controls\Tab::append

(UI 0.9.9)

UI\Controls\Tab::append — Anexa página

### Descrição

public function **UI\Controls\Tab::append**([string](language.types.string.md) `$name`, [UI\Control](class.ui-control.md) `$control`): [int](language.types.integer.md)

Anexa uma nova página a este controle de guias.

### Parâmetros

`name`
:   O nome para a nova página.

`control`
:   O controle para a nova página.

### Valor Retornado

Retorna o índice do controle anexado, pode ser 0.

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
