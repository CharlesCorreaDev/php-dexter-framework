# Recupera altura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-size.getheight.php

---

# UI\Size::getHeight

(UI 0.9.9)

UI\Size::getHeight — Recupera altura

### Descrição

public function **UI\Size::getHeight**(): [float](language.types.float.md)

Recupera a altura.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A altura atual.

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
