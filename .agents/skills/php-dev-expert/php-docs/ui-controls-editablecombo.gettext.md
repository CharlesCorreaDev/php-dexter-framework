# Obtém texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-editablecombo.gettext.php

---

# UI\Controls\EditableCombo::getText

(UI 0.9.9)

UI\Controls\EditableCombo::getText — Obtém texto

### Descrição

public function **UI\Controls\EditableCombo::getText**(): [string](language.types.string.md)

Obtém o valor da opção atualmente selecionada nesta caixa combinada editável.

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
