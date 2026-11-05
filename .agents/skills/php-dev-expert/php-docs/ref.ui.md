# Funções de UI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.ui.php

---

# Funções de UI

## Índice

- [UI\Draw\Text\Font\fontFamilies](function.ui-draw-text-font-fontfamilies.md) — Recupera Famílias de Fontes
- [UI\quit](function.ui-quit.md) — Sai de um Laço UI
- [UI\run](function.ui-run.md) — Entra no Laço UI

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
