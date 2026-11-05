# Obtém extremidade de linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-stroke.getcap.php

---

# UI\Draw\Stroke::getCap

(UI 0.9.9)

UI\Draw\Stroke::getCap — Obtém extremidade de linha

### Descrição

public function **UI\Draw\Stroke::getCap**(): [int](language.types.integer.md)

Recupera a configuração da extremidade da linha para este traço.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

UI\Draw\Line\Cap::Flat, UI\Draw\Line\Cap::Round ou UI\Draw\Line\Cap::Square.

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
