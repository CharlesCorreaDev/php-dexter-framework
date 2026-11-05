# Detecção de borda

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.hasborders.php

---

# UI\Window::hasBorders

(UI 0.9.9)

UI\Window::hasBorders — Detecção de borda

### Descrição

public function **UI\Window::hasBorders**(): [bool](language.types.boolean.md)

Detecta se são usadas bordas nesta janela.

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
