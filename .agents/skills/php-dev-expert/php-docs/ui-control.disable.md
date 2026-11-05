# Desabilita o controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.disable.php

---

# UI\Control::disable

(UI 0.9.9)

UI\Control::disable — Desabilita o controle

### Descrição

public function **UI\Control::disable**()

Desabilita este controle.

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
