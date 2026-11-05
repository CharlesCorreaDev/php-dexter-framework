# Controle de entrada multi-linhas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-multilineentry.php

---

# Controle de entrada multi-linhas

(UI 0.9.9)

## Introdução

Uma entrada multi-linhas é um controle de entrada de texto capaz de conter múltiplas linhas de texto, com ou sem quebra de linhas.

## Resumo da classe

class **UI\Controls\MultilineEntry**

extends
[UI\Control](class.ui-control.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Wrap](class.ui-controls-multilineentry.md#ui-controls-multilineentry.constants.wrap);

const
[int](language.types.integer.md)
[NoWrap](class.ui-controls-multilineentry.md#ui-controls-multilineentry.constants.nowrap);

/\* Constructor \*/

public function [\_\_construct](ui-controls-multilineentry.construct.md)([int](language.types.integer.md) `$type` = ?)

/\* Métodos \*/

public function [append](ui-controls-multilineentry.append.md)([string](language.types.string.md) `$text`)

public function [getText](ui-controls-multilineentry.gettext.md)(): [string](language.types.string.md)

public function [isReadOnly](ui-controls-multilineentry.isreadonly.md)(): [bool](language.types.boolean.md)

protected function [onChange](ui-controls-multilineentry.onchange.md)()

public function [setReadOnly](ui-controls-multilineentry.setreadonly.md)([bool](language.types.boolean.md) `$readOnly`)

public function [setText](ui-controls-multilineentry.settext.md)([string](language.types.string.md) `$text`)

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

**`UI\Controls\MultilineEntry::Wrap`**
:   Allow lines to wrap

**`UI\Controls\MultilineEntry::NoWrap`**
:   Do not allow lines to wrap

## Índice

- [UI\Controls\MultilineEntry::append](ui-controls-multilineentry.append.md) — Anexa texto
- [UI\Controls\MultilineEntry::\_\_construct](ui-controls-multilineentry.construct.md) — Constrói uma nova entrada multilinhas
- [UI\Controls\MultilineEntry::getText](ui-controls-multilineentry.gettext.md) — Obtém texto
- [UI\Controls\MultilineEntry::isReadOnly](ui-controls-multilineentry.isreadonly.md) — Deteção de somente leitura
- [UI\Controls\MultilineEntry::onChange](ui-controls-multilineentry.onchange.md) — Manipulador de alteração
- [UI\Controls\MultilineEntry::setReadOnly](ui-controls-multilineentry.setreadonly.md) — Define como somente leitura
- [UI\Controls\MultilineEntry::setText](ui-controls-multilineentry.settext.md) — Define texto

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
