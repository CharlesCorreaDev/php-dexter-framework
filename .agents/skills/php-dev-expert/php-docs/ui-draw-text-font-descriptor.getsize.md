# Detecção de dimensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font-descriptor.getsize.php

---

# UI\Draw\Text\Font\Descriptor::getSize

(UI 1.0.3)

UI\Draw\Text\Font\Descriptor::getSize — Detecção de dimensão

### Descrição

public function **UI\Draw\Text\Font\Descriptor::getSize**(): [float](language.types.float.md)

Retorna a dimensão deste descritor.

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
