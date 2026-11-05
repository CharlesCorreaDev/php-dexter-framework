# Rotaciona matriz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-matrix.rotate.php

---

# UI\Draw\Matrix::rotate

(UI 0.9.9)

UI\Draw\Matrix::rotate — Rotaciona matriz

### Descrição

public function **UI\Draw\Matrix::rotate**([UI\Point](class.ui-point.md) `$point`, [float](language.types.float.md) `$amount`)

Rotaciona esta matriz

### Parâmetros

`point`

`amount`

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
