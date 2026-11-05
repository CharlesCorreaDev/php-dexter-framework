# Constrói um novo selecionador de data/horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-picker.construct.php

---

# UI\Controls\Picker::\_\_construct

(UI 0.9.9)

UI\Controls\Picker::\_\_construct — Constrói um novo selecionador de data/horário

### Descrição

public function **UI\Controls\Picker::\_\_construct**([int](language.types.integer.md) `$type` = UI\Controls\Picker::Date)

Constrói um novo selecionador do tipo informado.

### Parâmetros

`type`
:   Picker::Date, Picker::Time ou Picker::DateTime.

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
