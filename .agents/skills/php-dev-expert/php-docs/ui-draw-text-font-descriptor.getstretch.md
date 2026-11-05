# Detecção de estilo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font-descriptor.getstretch.php

---

# UI\Draw\Text\Font\Descriptor::getStretch

(UI 1.0.3)

UI\Draw\Text\Font\Descriptor::getStretch — Detecção de estilo

### Descrição

public function **UI\Draw\Text\Font\Descriptor::getStretch**(): [int](language.types.integer.md)

Retorna o esticamento deste descritor.

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
