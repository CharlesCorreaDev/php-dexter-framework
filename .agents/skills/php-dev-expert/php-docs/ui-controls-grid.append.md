# Anexa controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-grid.append.php

---

# UI\Controls\Grid::append

(UI 0.9.9)

UI\Controls\Grid::append — Anexa controle

### Descrição

public function **UI\Controls\Grid::append**(  
    [UI\Control](class.ui-control.md) `$control`,  
    [int](language.types.integer.md) `$left`,  
    [int](language.types.integer.md) `$top`,  
    [int](language.types.integer.md) `$xspan`,  
    [int](language.types.integer.md) `$yspan`,  
    [bool](language.types.boolean.md) `$hexpand`,  
    [int](language.types.integer.md) `$halign`,  
    [bool](language.types.boolean.md) `$vexpand`,  
    [int](language.types.integer.md) `$valign`  
)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`control`
:   O controle a anexar.

`left`

`top`

`xspan`

`yspan`

`hexpand`

`halign`

`vexpand`

`valign`

### Valor Retornado

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
