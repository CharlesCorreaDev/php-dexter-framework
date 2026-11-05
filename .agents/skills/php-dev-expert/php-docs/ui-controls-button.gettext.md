# Obtém texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-button.gettext.php

---

# UI\Controls\Button::getText

(UI 0.9.9)

UI\Controls\Button::getText — Obtém texto

### Descrição

public function **UI\Controls\Button::getText**(): [string](language.types.string.md)

Recupera o texto (rótulo) para este botão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O texto atual (rótulo).

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
