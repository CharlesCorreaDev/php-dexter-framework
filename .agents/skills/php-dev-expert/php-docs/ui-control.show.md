# Exibe o controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.show.php

---

# UI\Control::show

(UI 0.9.9)

UI\Control::show — Exibe o controle

### Descrição

public function **UI\Control::show**()

Exibe este controle.

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
