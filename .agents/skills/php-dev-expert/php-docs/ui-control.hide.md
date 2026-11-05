# Oculta o controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.hide.php

---

# UI\Control::hide

(UI 0.9.9)

UI\Control::hide — Oculta o controle

### Descrição

public function **UI\Control::hide**()

Oculta este controle.

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
