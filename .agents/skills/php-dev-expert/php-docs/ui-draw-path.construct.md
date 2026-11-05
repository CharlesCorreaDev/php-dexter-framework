# Constrói um novo caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-path.construct.php

---

# UI\Draw\Path::\_\_construct

(UI 0.9.9)

UI\Draw\Path::\_\_construct — Constrói um novo caminho

### Descrição

public function **UI\Draw\Path::\_\_construct**([int](language.types.integer.md) `$mode` = UI\Draw\Path::Winding)

Constrói um novo caminho do modo informado.

### Parâmetros

`mode`
:   Path::Winding ou Path::Alternate.

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
