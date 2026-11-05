# Remove controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-form.delete.php

---

# UI\Controls\Form::delete

(UI 0.9.9)

UI\Controls\Form::delete — Remove controle

### Descrição

public function **UI\Controls\Form::delete**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Remove o controle no índice especificado deste formulário.

### Parâmetros

`index`
:   O índice do controle a ser removido.

### Valor Retornado

Indicação de sucesso.

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
