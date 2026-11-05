# Define canal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui-draw-color.setchannel.php

---

# UI\Draw\Color::setChannel

(UI 0.9.9)

UI\Draw\Color::setChannel — Define canal

### Descrição

public function **UI\Draw\Color::setChannel**([int](language.types.integer.md) `$channel`, [float](language.types.float.md) `$value`): [void](language.types.void.md)

Define o canal selecionado para o valor fornecido.

### Parâmetros

`channel`
:   Constante que identifica o canal de cor.

`value`
:   O novo valor para o canal selecionado.

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
