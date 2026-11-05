# Constrói um novo separador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-separator.construct.php

---

# UI\Controls\Separator::\_\_construct

(UI 0.9.9)

UI\Controls\Separator::\_\_construct — Constrói um novo separador

### Descrição

public function **UI\Controls\Separator::\_\_construct**([int](language.types.integer.md) `$type` = UI\Controls\Separator::Horizontal)

Constrói um novo separador do tipo informado.

### Parâmetros

`type`
:   Separator::Horizontal ou Separator::Vertical.

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
