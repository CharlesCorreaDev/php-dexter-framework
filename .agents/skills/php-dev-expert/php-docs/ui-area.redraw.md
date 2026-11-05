# Redesenha área

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-area.redraw.php

---

# UI\Area::redraw

(UI 0.9.9)

UI\Area::redraw — Redesenha área

### Descrição

public function **UI\Area::redraw**()

Faz a requisição de redesenho da área.

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
