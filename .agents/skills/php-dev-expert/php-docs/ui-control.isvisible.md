# Determina se o controle está visível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.isvisible.php

---

# UI\Control::isVisible

(UI 0.9.9)

UI\Control::isVisible — Determina se o controle está visível

### Descrição

public function **UI\Control::isVisible**(): [bool](language.types.boolean.md)

Detecta se este controle está visível.

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
