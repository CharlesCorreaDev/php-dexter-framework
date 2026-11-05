# Define Y

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-point.sety.php

---

# UI\Point::setY

(UI 0.9.9)

UI\Point::setY — Define Y

### Descrição

public function **UI\Point::setY**([float](language.types.float.md) `$point`)

Define a coordenada Y.

### Parâmetros

`point`
:   A nova coordenada Y.

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
