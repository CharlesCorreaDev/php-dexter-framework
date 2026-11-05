# Função de retorno de clique

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-menuitem.onclick.php

---

# UI\MenuItem::onClick

(UI 0.9.9)

UI\MenuItem::onClick — Função de retorno de clique

### Descrição

protected function **UI\MenuItem::onClick**()

Executado quando o item de menu é clicado.

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
