# Controle seletor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-picker.php

---

# Controle seletor

(UI 0.9.9)

## Introdução

Um seletor representa um botão que quando clicado apresenta um seletor nativo de interface de data/horário ao usuário.

## Resumo da classe

class **UI\Controls\Picker**

extends
[UI\Control](class.ui-control.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Date](class.ui-controls-picker.md#ui-controls-picker.constants.date);

const
[int](language.types.integer.md)
[Time](class.ui-controls-picker.md#ui-controls-picker.constants.time);

const
[int](language.types.integer.md)
[DateTime](class.ui-controls-picker.md#ui-controls-picker.constants.datetime);

/\* Constructor \*/

public function [\_\_construct](ui-controls-picker.construct.md)([int](language.types.integer.md) `$type` = UI\Controls\Picker::Date)

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

**`UI\Controls\Picker::Date`**
:   Um seletor de data

**`UI\Controls\Picker::Time`**
:   Um seletor de horário

**`UI\Controls\Picker::DateTime`**
:   Um seletor de data e horário

## Índice

- [UI\Controls\Picker::\_\_construct](ui-controls-picker.construct.md) — Constrói um novo selecionador de data/horário

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
