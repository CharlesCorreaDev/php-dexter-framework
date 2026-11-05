# Contagem de páginas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-tab.pages.php

---

# UI\Controls\Tab::pages

(UI 0.9.9)

UI\Controls\Tab::pages — Contagem de páginas

### Descrição

public function **UI\Controls\Tab::pages**(): [int](language.types.integer.md)

Retorna o número de página neste controle de guias.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O número de página neste controle de guias.

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
