# Controle de caixa combinada editável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-editablecombo.php

---

# Controle de caixa combinada editável

(UI 0.9.9)

## Introdução

Uma caixa combinada editável é uma caixa combinada que permite ao usuário inserir opções customizadas.

## Resumo da classe

class **UI\Controls\EditableCombo**

extends
[UI\Control](class.ui-control.md)
{

/\* Métodos \*/

public function [append](ui-controls-editablecombo.append.md)([string](language.types.string.md) `$text`)

public function [getText](ui-controls-editablecombo.gettext.md)(): [string](language.types.string.md)

protected function [onChange](ui-controls-editablecombo.onchange.md)()

public function [setText](ui-controls-editablecombo.settext.md)([string](language.types.string.md) `$text`)

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

- [UI\Controls\EditableCombo::append](ui-controls-editablecombo.append.md) — Anexa opção
- [UI\Controls\EditableCombo::getText](ui-controls-editablecombo.gettext.md) — Obtém texto
- [UI\Controls\EditableCombo::onChange](ui-controls-editablecombo.onchange.md) — Manipulador de alteração
- [UI\Controls\EditableCombo::setText](ui-controls-editablecombo.settext.md) — Define texto

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
