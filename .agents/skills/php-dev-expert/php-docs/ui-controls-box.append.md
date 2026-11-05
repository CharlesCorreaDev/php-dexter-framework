# Anexa o controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-box.append.php

---

# UI\Controls\Box::append

(UI 0.9.9)

UI\Controls\Box::append — Anexa o controle

### Descrição

public function **UI\Controls\Box::append**(Control `$control`, [bool](language.types.boolean.md) `$stretchy` = **`false`**): [int](language.types.integer.md)

Anexa o controle informado a esta caixa.

### Parâmetros

`control`
:   O controle a anexar.

`stretchy`
:   Se definido para true, estica o controle.

### Valor Retornado

Retorna o índica do controle anexado, pode ser 0.

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
