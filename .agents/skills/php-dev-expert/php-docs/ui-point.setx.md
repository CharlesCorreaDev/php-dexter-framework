# Define X

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-point.setx.php

---

# UI\Point::setX

(UI 0.9.9)

UI\Point::setX — Define X

### Descrição

public function **UI\Point::setX**([float](language.types.float.md) `$point`)

Define a coordenada X.

### Parâmetros

`point`
:   A nova coordenada X.

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
