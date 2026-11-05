# Controle de formulário (arranjo)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-form.php

---

# Controle de formulário (arranjo)

(UI 0.9.9)

## Introdução

Um formulário é um controle que permite o arranjo de outros controles em uma disposição familiar.

## Resumo da classe

class **UI\Controls\Form**

extends
[UI\Control](class.ui-control.md)
{

/\* Propriedades \*/

protected
[$controls](class.ui-controls-form.md#ui-controls-form.props.controls);

/\* Métodos \*/

public function [append](ui-controls-form.append.md)([string](language.types.string.md) `$label`, [UI\Control](class.ui-control.md) `$control`, [bool](language.types.boolean.md) `$stretchy` = **`false`**): [int](language.types.integer.md)

public function [delete](ui-controls-form.delete.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [isPadded](ui-controls-form.ispadded.md)(): [bool](language.types.boolean.md)

public function [setPadded](ui-controls-form.setpadded.md)([bool](language.types.boolean.md) `$padded`)

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

## Propriedades

controls
:   Contém controles, não deve ser manipulado diretamente.

## Índice

- [UI\Controls\Form::append](ui-controls-form.append.md) — Anexa controle
- [UI\Controls\Form::delete](ui-controls-form.delete.md) — Remove controle
- [UI\Controls\Form::isPadded](ui-controls-form.ispadded.md) — Detecção de preenchimento
- [UI\Controls\Form::setPadded](ui-controls-form.setpadded.md) — Define preenchimento

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
