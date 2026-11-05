# Controle de Botão de Cores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-colorbutton.php

---

# Controle de Botão de Cores

(UI 0.9.9)

## Introdução

Um botão de cores é um botão que mostra um seletor de cores quando clicado.

## Resumo da classe

class **UI\Controls\ColorButton**

extends
[UI\Control](class.ui-control.md)
{

/\* Métodos \*/

public function [getColor](ui-controls-colorbutton.getcolor.md)(): UI\Color

protected function [onChange](ui-controls-colorbutton.onchange.md)()

public function [setColor](ui-controls-colorbutton.setcolor.md)([UI\Draw\Color](class.ui-draw-color.md) `$color`)

public function [setColor](ui-controls-colorbutton.setcolor.md)([int](language.types.integer.md) `$color`)

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

- [UI\Controls\ColorButton::getColor](ui-controls-colorbutton.getcolor.md) — Obtém a cor
- [UI\Controls\ColorButton::onChange](ui-controls-colorbutton.onchange.md) — Manipulador de alteração
- [UI\Controls\ColorButton::setColor](ui-controls-colorbutton.setcolor.md) — Define a cor

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
