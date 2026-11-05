# Obtém texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-label.gettext.php

---

# UI\Controls\Label::getText

(UI 0.9.9)

UI\Controls\Label::getText — Obtém texto

### Descrição

public function **UI\Controls\Label::getText**(): [string](language.types.string.md)

Retorna o texto atual para este rótulo.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

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
