# Caixa de diálogo de abertura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.open.php

---

# UI\Window::open

(UI 0.9.9)

UI\Window::open — Caixa de diálogo de abertura

### Descrição

public function **UI\Window::open**(): [string](language.types.string.md)

Mostra uma caixa de diálogo de abertura de arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do arquivo selecionado para abertura.

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
