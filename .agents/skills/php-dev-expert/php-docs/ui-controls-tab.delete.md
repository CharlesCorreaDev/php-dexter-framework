# Remove página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-tab.delete.php

---

# UI\Controls\Tab::delete

(UI 0.9.9)

UI\Controls\Tab::delete — Remove página

### Descrição

public function **UI\Controls\Tab::delete**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Remova a página selecionada deste controle de guias.

### Parâmetros

`index`
:   O índice da página a ser removida.

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
