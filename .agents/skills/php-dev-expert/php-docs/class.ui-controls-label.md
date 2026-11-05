# Controle de Rótulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-label.php

---

# Controle de Rótulo

(UI 0.9.9)

## Introdução

Um rótulo é uma linha única de texto cujo objetivo é identificar, para o usuário, algum elemento da interface.

## Resumo da classe

class **UI\Controls\Label**

extends
[UI\Control](class.ui-control.md)
{

/\* Constructor \*/

public function [\_\_construct](ui-controls-label.construct.md)([string](language.types.string.md) `$text`)

/\* Métodos \*/

public function [getText](ui-controls-label.gettext.md)(): [string](language.types.string.md)

public function [setText](ui-controls-label.settext.md)([string](language.types.string.md) `$text`)

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

- [UI\Controls\Label::\_\_construct](ui-controls-label.construct.md) — Constrói um novo rótulo
- [UI\Controls\Label::getText](ui-controls-label.gettext.md) — Obtém texto
- [UI\Controls\Label::setText](ui-controls-label.settext.md) — Define texto

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
