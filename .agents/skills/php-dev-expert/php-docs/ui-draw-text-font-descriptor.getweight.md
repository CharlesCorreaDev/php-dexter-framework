# Detecção de peso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font-descriptor.getweight.php

---

# UI\Draw\Text\Font\Descriptor::getWeight

(UI 1.0.3)

UI\Draw\Text\Font\Descriptor::getWeight — Detecção de peso

### Descrição

public function **UI\Draw\Text\Font\Descriptor::getWeight**(): [int](language.types.integer.md)

Retorna o peso deste descritor.

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
