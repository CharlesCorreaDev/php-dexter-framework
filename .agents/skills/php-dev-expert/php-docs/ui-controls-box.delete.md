# Remove o controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-controls-box.delete.php

---

# UI\Controls\Box::delete

(UI 0.9.9)

UI\Controls\Box::delete — Remove o controle

### Descrição

public function **UI\Controls\Box::delete**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Remove o controle do índice especificado desta caixa.

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
