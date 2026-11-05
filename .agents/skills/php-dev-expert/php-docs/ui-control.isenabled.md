# Determina se o controle está habilitado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.isenabled.php

---

# UI\Control::isEnabled

(UI 0.9.9)

UI\Control::isEnabled — Determina se o controle está habilitado

### Descrição

public function **UI\Control::isEnabled**(): [bool](language.types.boolean.md)

Detecta se este controle está habilitado.

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
