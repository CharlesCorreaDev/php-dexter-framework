# Controle deslizante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-slider.php

---

# Controle deslizante

(UI 0.9.9)

## Introdução

Um controle deslizante representa um faixa e um valor atual nesta faixa. O elemento deslizante do controle reflete o valor e pode ser ajustado dentro da faixa.

## Resumo da classe

class **UI\Controls\Slider**

extends
[UI\Control](class.ui-control.md)
{

/\* Constructor \*/

public function [\_\_construct](ui-controls-slider.construct.md)([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`)

/\* Métodos \*/

public function [getValue](ui-controls-slider.getvalue.md)(): [int](language.types.integer.md)

protected function [onChange](ui-controls-slider.onchange.md)()

public function [setValue](ui-controls-slider.setvalue.md)([int](language.types.integer.md) `$value`)

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

- [UI\Controls\Slider::\_\_construct](ui-controls-slider.construct.md) — Constrói um novo controle deslizante
- [UI\Controls\Slider::getValue](ui-controls-slider.getvalue.md) — Obtém valor
- [UI\Controls\Slider::onChange](ui-controls-slider.onchange.md) — Manipulador de alteração
- [UI\Controls\Slider::setValue](ui-controls-slider.setvalue.md) — Define valor

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
