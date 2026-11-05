# Anexa controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-form.append.php

---

# UI\Controls\Form::append

(UI 0.9.9)

UI\Controls\Form::append — Anexa controle

### Descrição

public function **UI\Controls\Form::append**([string](language.types.string.md) `$label`, [UI\Control](class.ui-control.md) `$control`, [bool](language.types.boolean.md) `$stretchy` = **`false`**): [int](language.types.integer.md)

Anexa o controle ao formulário e define o rótulo.

### Parâmetros

`label`
:   O texto para o rótulo.

`control`
:   Um controle.

`stretchy`
:   Se definido para true estica o controle.

### Valor Retornado

Retorna o índice do controle anexado, pode ser 0.

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
