# Obtém texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-multilineentry.gettext.php

---

# UI\Controls\MultilineEntry::getText

(UI 0.9.9)

UI\Controls\MultilineEntry::getText — Obtém texto

### Descrição

public function **UI\Controls\MultilineEntry::getText**(): [string](language.types.string.md)

Retorna o texto nesta entrada multilinhas.

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
