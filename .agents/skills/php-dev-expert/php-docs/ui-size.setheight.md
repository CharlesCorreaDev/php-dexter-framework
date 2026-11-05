# Define altura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-size.setheight.php

---

# UI\Size::setHeight

(UI 0.9.9)

UI\Size::setHeight — Define altura

### Descrição

public function **UI\Size::setHeight**([float](language.types.float.md) `$size`)

Define nova altura.

### Parâmetros

`size`
:   A nova altura.

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
