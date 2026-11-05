# Controle de caixa combinada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-combo.php

---

# Controle de caixa combinada

(UI 0.9.9)

## Introdução

Um controle de caixa combinada representa uma lista de opções, como o familiar elemento HTML de seleção.

## Resumo da classe

class **UI\Controls\Combo**

extends
[UI\Control](class.ui-control.md)
{

/\* Métodos \*/

public function [append](ui-controls-combo.append.md)([string](language.types.string.md) `$text`)

public function [getSelected](ui-controls-combo.getselected.md)(): [int](language.types.integer.md)

protected function [onSelected](ui-controls-combo.onselected.md)()

public function [setSelected](ui-controls-combo.setselected.md)([int](language.types.integer.md) `$index`)

/\* Métodos herdados \*/

public function [UI\Control::destroy](ui-control.destroy.md)()

public function [UI\Control::disable](ui-control.disable.md)()

public function [UI\Control::enable](ui-control.enable.md)()

public function [UI\Control::getParent](ui-control.getparent.md)(): [UI\Control](class.ui-control.md)

public function [UI\Control::getTopLevel](ui-control.gettoplevel.md)(): [int](language.types.integer.md)

public function [UI\Control::hide](ui-control.hide.md)()

public function [UI\Control::isEnabled](ui-control.isenabled.md)(): [bool](language.types.boolean.md)

public function [UI\Control::isVisible](ui-control.isvisible.md)(): [bool](language.types.boolean.md)

public function [UI\Control::setParent](ui-control.setparent.md)([UI\Control](class.ui-control.md) `$parent`)

public function [UI\Control::show](ui-control.show.md)()

}

## Índice

- [UI\Controls\Combo::append](ui-controls-combo.append.md) — Anexa opção
- [UI\Controls\Combo::getSelected](ui-controls-combo.getselected.md) — Obtém a opção selecionada
- [UI\Controls\Combo::onSelected](ui-controls-combo.onselected.md) — Manipulador de seleção
- [UI\Controls\Combo::setSelected](ui-controls-combo.setselected.md) — Define opção selecionada

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
