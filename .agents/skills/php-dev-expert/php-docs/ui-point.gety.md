# Recupera Y

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-point.gety.php

---

# UI\Point::getY

(UI 0.9.9)

UI\Point::getY — Recupera Y

### Descrição

public function **UI\Point::getY**(): [float](language.types.float.md)

Recupera a coordenada Y.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A coordenada Y atual.

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
