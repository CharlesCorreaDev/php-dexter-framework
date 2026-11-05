# Define junção de linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-stroke.setjoin.php

---

# UI\Draw\Stroke::setJoin

(UI 0.9.9)

UI\Draw\Stroke::setJoin — Define junção de linha

### Descrição

public function **UI\Draw\Stroke::setJoin**([int](language.types.integer.md) `$join`)

Define a configuração de junção de linha para este traço.

### Parâmetros

`join`
:   UI\Draw\Line\Join::Miter, UI\Draw\Line\Join::Round ou UI\Draw\Line\Join::Bevel.

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
