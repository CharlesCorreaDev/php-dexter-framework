# Anexa controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-group.append.php

---

# UI\Controls\Group::append

(No version information available, might only be in Git)

UI\Controls\Group::append — Anexa controle

### Descrição

public function **UI\Controls\Group::append**([UI\Control](class.ui-control.md) `$control`)

Anexa um controle a este grupo.

### Parâmetros

`control`
:   O controle a anexar.

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
