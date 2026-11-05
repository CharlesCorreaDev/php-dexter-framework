# Caixa de diálogo de salvamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-window.save.php

---

# UI\Window::save

(UI 0.9.9)

UI\Window::save — Caixa de diálogo de salvamento

### Descrição

public function **UI\Window::save**(): [string](language.types.string.md)

Mostra uma caixa de diálogo de salvamento de arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nome do arquivo selecionado para salvamento.

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
