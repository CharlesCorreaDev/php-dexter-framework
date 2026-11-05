# Constrói um novo grupo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-group.construct.php

---

# UI\Controls\Group::\_\_construct

(UI 0.9.9)

UI\Controls\Group::\_\_construct — Constrói um novo grupo

### Descrição

public function **UI\Controls\Group::\_\_construct**([string](language.types.string.md) `$title`)

Constrói um novo grupo com o título informado.

### Parâmetros

`title`
:   O texto para o rótulo do título.

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
