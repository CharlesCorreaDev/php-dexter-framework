# Finaliza caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-path.end.php

---

# UI\Draw\Path::end

(UI 0.9.9)

UI\Draw\Path::end — Finaliza caminho

### Descrição

public function **UI\Draw\Path::end**()

Finaliza este caminho.

### Parâmetros

Esta função não possui parâmetros.

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
