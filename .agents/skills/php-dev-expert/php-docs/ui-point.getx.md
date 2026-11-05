# Recupera X

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-point.getx.php

---

# UI\Point::getX

(UI 0.9.9)

UI\Point::getX — Recupera X

### Descrição

public function **UI\Point::getX**(): [float](language.types.float.md)

Recupera a coordenada X.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A coordenada X atual.

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
