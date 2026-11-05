# Obtém junção de linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-stroke.getjoin.php

---

# UI\Draw\Stroke::getJoin

(UI 0.9.9)

UI\Draw\Stroke::getJoin — Obtém junção de linha

### Descrição

public function **UI\Draw\Stroke::getJoin**(): [int](language.types.integer.md)

Recupera a configuração de junção de linha deste traço.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

UI\Draw\Line\Join::Miter, UI\Draw\Line\Join::Round ou UI\Draw\Line\Join::Bevel.

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
