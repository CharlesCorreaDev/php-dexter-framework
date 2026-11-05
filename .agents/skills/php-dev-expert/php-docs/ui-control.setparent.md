# Define o controle pai

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.setparent.php

---

# UI\Control::setParent

(UI 0.9.9)

UI\Control::setParent — Define o controle pai

### Descrição

public function **UI\Control::setParent**([UI\Control](class.ui-control.md) `$parent`)

Define o controle pai deste controle.

### Parâmetros

`parent`
:   O controle pai.

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
