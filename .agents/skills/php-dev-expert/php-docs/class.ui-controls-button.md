# Controle de Botão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-button.php

---

# Controle de Botão

(UI 0.9.9)

## Introdução

Representa um botão com rótulo clicável.

## Resumo da classe

class **UI\Controls\Button**

extends
[UI\Control](class.ui-control.md)
{

/\* Constructor \*/

public function [\_\_construct](ui-controls-button.construct.md)([string](language.types.string.md) `$text`)

/\* Métodos \*/

public function [getText](ui-controls-button.gettext.md)(): [string](language.types.string.md)

protected function [onClick](ui-controls-button.onclick.md)()

public function [setText](ui-controls-button.settext.md)([string](language.types.string.md) `$text`)

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

- [UI\Controls\Button::\_\_construct](ui-controls-button.construct.md) — Constrói um novo botão
- [UI\Controls\Button::getText](ui-controls-button.gettext.md) — Obtém texto
- [UI\Controls\Button::onClick](ui-controls-button.onclick.md) — Manipulador de clique
- [UI\Controls\Button::setText](ui-controls-button.settext.md) — Define o texto

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
