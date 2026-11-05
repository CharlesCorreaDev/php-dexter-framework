# Define a dimensão da área

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-area.setsize.php

---

# UI\Area::setSize

(UI 0.9.9)

UI\Area::setSize — Define a dimensão da área

### Descrição

public function **UI\Area::setSize**([UI\Size](class.ui-size.md) `$size`)

Define a dimensão da área.

### Parâmetros

`size`
:   A nova dimensão.

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
