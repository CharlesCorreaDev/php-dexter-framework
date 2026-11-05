# Controle de entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-entry.php

---

# Controle de entrada

(UI 0.9.9)

## Introdução

É um controle de entrada de texto, adequado para entrar texto puro, senhas ou termos de pesquisa.

## Resumo da classe

class **UI\Controls\Entry**

extends
[UI\Control](class.ui-control.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Normal](class.ui-controls-entry.md#ui-controls-entry.constants.normal);

const
[int](language.types.integer.md)
[Password](class.ui-controls-entry.md#ui-controls-entry.constants.password);

const
[int](language.types.integer.md)
[Search](class.ui-controls-entry.md#ui-controls-entry.constants.search);

/\* Constructor \*/

public function [\_\_construct](ui-controls-entry.construct.md)([int](language.types.integer.md) `$type` = UI\Controls\Entry::Normal)

/\* Métodos \*/

public function [getText](ui-controls-entry.gettext.md)(): [string](language.types.string.md)

public function [isReadOnly](ui-controls-entry.isreadonly.md)(): [bool](language.types.boolean.md)

protected function [onChange](ui-controls-entry.onchange.md)()

public function [setReadOnly](ui-controls-entry.setreadonly.md)([bool](language.types.boolean.md) `$readOnly`)

public function [setText](ui-controls-entry.settext.md)([string](language.types.string.md) `$text`)

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

**`UI\Controls\Entry::Normal`**
:   Uma entrada normal de linha única

**`UI\Controls\Entry::Password`**
:   Uma entrada de senha

**`UI\Controls\Entry::Search`**
:   Uma entrada de pesquisa

## Índice

- [UI\Controls\Entry::\_\_construct](ui-controls-entry.construct.md) — Constrói uma nova entrada
- [UI\Controls\Entry::getText](ui-controls-entry.gettext.md) — Obtém texto
- [UI\Controls\Entry::isReadOnly](ui-controls-entry.isreadonly.md) — Detecta somente leitura
- [UI\Controls\Entry::onChange](ui-controls-entry.onchange.md) — Manipulador de alteração
- [UI\Controls\Entry::setReadOnly](ui-controls-entry.setreadonly.md) — Define como somente leitura
- [UI\Controls\Entry::setText](ui-controls-entry.settext.md) — Define texto

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
