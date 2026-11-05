# Obtém título

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-group.gettitle.php

---

# UI\Controls\Group::getTitle

(UI 0.9.9)

UI\Controls\Group::getTitle — Obtém título

### Descrição

public function **UI\Controls\Group::getTitle**(): [string](language.types.string.md)

Retorna o título atual para este grupo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O título atual.

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
