# Medidas de fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font.getascent.php

---

# UI\Draw\Text\Font::getAscent

(UI 1.0.3)

UI\Draw\Text\Font::getAscent — Medidas de fonte

### Descrição

public function **UI\Draw\Text\Font::getAscent**(): [float](language.types.float.md)

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
