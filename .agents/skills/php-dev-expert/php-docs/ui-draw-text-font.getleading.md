# Medidas de fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font.getleading.php

---

# UI\Draw\Text\Font::getLeading

(UI 1.0.3)

UI\Draw\Text\Font::getLeading — Medidas de fonte

### Descrição

public function **UI\Draw\Text\Font::getLeading**(): [float](language.types.float.md)

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
