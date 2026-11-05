# Uso de tela cheia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.setfullscreen.php

---

# UI\Window::setFullScreen

(UI 0.9.9)

UI\Window::setFullScreen — Uso de tela cheia

### Descrição

public function **UI\Window::setFullScreen**([bool](language.types.boolean.md) `$full`)

Habilita ou desabilita o uso de tela cheia para esta janela.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`full`

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
