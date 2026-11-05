# Define largura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-size.setwidth.php

---

# UI\Size::setWidth

(UI 0.9.9)

UI\Size::setWidth — Define largura

### Descrição

public function **UI\Size::setWidth**([float](language.types.float.md) `$size`)

Define a nova largura.

### Parâmetros

`size`
:   A nova largura.

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
