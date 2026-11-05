# Detecção de estilo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font-descriptor.getitalic.php

---

# UI\Draw\Text\Font\Descriptor::getItalic

(UI 1.0.3)

UI\Draw\Text\Font\Descriptor::getItalic — Detecção de estilo

### Descrição

public function **UI\Draw\Text\Font\Descriptor::getItalic**(): [int](language.types.integer.md)

Retorna configuração de fonte itálica deste descritor.

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
