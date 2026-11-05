# Obtém família de fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-text-font-descriptor.getfamily.php

---

# UI\Draw\Text\Font\Descriptor::getFamily

(UI 1.0.3)

UI\Draw\Text\Font\Descriptor::getFamily — Obtém família de fonte

### Descrição

public function **UI\Draw\Text\Font\Descriptor::getFamily**(): [string](language.types.string.md)

Retorna a família de fonte deste descritor.

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
