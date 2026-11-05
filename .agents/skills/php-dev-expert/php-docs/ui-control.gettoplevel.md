# Obtém o nível mais alto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-control.gettoplevel.php

---

# UI\Control::getTopLevel

(UI 0.9.9)

UI\Control::getTopLevel — Obtém o nível mais alto

### Descrição

public function **UI\Control::getTopLevel**(): [int](language.types.integer.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

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
