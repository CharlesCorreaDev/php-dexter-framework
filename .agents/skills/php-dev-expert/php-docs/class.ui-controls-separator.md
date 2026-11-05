# Controle de separador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-separator.php

---

# Controle de separador

(UI 0.9.9)

## Introdução

Um separador representa apenas um controle de separação, não tem nenhuma outra função.

## Resumo da classe

class **UI\Controls\Separator**

extends
[UI\Control](class.ui-control.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Horizontal](class.ui-controls-separator.md#ui-controls-separator.constants.horizontal);

const
[int](language.types.integer.md)
[Vertical](class.ui-controls-separator.md#ui-controls-separator.constants.vertical);

/\* Constructor \*/

public function [\_\_construct](ui-controls-separator.construct.md)([int](language.types.integer.md) `$type` = UI\Controls\Separator::Horizontal)

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

## Constantes predefinidas

**`UI\Controls\Separator::Horizontal`**
:   A Horizontal Separator

**`UI\Controls\Separator::Vertical`**
:   A Vertical Separator

## Índice

- [UI\Controls\Separator::\_\_construct](ui-controls-separator.construct.md) — Constrói um novo separador

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
