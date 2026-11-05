# Destrói o controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.destroy.php

---

# UI\Control::destroy

(UI 0.9.9)

UI\Control::destroy — Destrói o controle

### Descrição

public function **UI\Control::destroy**()

Destrói este controle.

### Parâmetros

Esta função não possui parâmetros.

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
