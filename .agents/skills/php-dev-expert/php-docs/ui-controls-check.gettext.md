# Obtém texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-check.gettext.php

---

# UI\Controls\Check::getText

(UI 0.9.9)

UI\Controls\Check::getText — Obtém texto

### Descrição

public function **UI\Controls\Check::getText**(): [string](language.types.string.md)

Retorna o texto (rótulo) para esta caixa de verificação.

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
