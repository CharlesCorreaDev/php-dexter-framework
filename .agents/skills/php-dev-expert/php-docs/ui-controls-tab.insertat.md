# Insere página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-tab.insertat.php

---

# UI\Controls\Tab::insertAt

(UI 0.9.9)

UI\Controls\Tab::insertAt — Insere página

### Descrição

public function **UI\Controls\Tab::insertAt**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$page`, [UI\Control](class.ui-control.md) `$control`)

Insere uma página neste controle de guias.

### Parâmetros

`name`
:   O nome para a nova página.

`page`
:   O índice antes do qual a página será inserida.

`control`
:   O controle para a nova página.

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
