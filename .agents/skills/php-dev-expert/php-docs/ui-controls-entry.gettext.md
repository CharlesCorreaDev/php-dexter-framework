# Obtém texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-entry.gettext.php

---

# UI\Controls\Entry::getText

(UI 0.9.9)

UI\Controls\Entry::getText — Obtém texto

### Descrição

public function **UI\Controls\Entry::getText**(): [string](language.types.string.md)

Retorna o texto atual desta entrada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O texto atual.

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
