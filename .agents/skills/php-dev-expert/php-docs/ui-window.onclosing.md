# Função de retorno de fechamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.onclosing.php

---

# UI\Window::onClosing

(UI 0.9.9)

UI\Window::onClosing — Função de retorno de fechamento

### Descrição

protected function **UI\Window::onClosing**(): [int](language.types.integer.md)

Destrói esta janela elegantemente.

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
