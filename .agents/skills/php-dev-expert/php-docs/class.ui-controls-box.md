# Caixa de Controle (arranjo)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-box.php

---

# Caixa de Controle (arranjo)

(UI 0.9.9)

## Introdução

Uma caixa permite o arranjo de outros controles.

## Resumo da classe

class **UI\Controls\Box**

extends
[UI\Control](class.ui-control.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Vertical](class.ui-controls-box.md#ui-controls-box.constants.vertical);

const
[int](language.types.integer.md)
[Horizontal](class.ui-controls-box.md#ui-controls-box.constants.horizontal);

/\* Propriedades \*/

protected
[$controls](class.ui-controls-box.md#ui-controls-box.props.controls);

/\* Constructor \*/

public function [\_\_construct](ui-controls-box.construct.md)([int](language.types.integer.md) `$orientation` = UI\Controls\Box::Horizontal)

/\* Métodos \*/

public function [append](ui-controls-box.append.md)(Control `$control`, [bool](language.types.boolean.md) `$stretchy` = **`false`**): [int](language.types.integer.md)

public function [delete](ui-controls-box.delete.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [getOrientation](ui-controls-box.getorientation.md)(): [int](language.types.integer.md)

public function [isPadded](ui-controls-box.ispadded.md)(): [bool](language.types.boolean.md)

public function [setPadded](ui-controls-box.setpadded.md)([bool](language.types.boolean.md) `$padded`)

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
:   Contém controles, não deve ser diretamente manipulada.

## Constantes predefinidas

**`UI\Controls\Box::Vertical`**

**`UI\Controls\Box::Horizontal`**

## Índice

- [UI\Controls\Box::append](ui-controls-box.append.md) — Anexa o controle
- [UI\Controls\Box::\_\_construct](ui-controls-box.construct.md) — Constrói uma nova caixa
- [UI\Controls\Box::delete](ui-controls-box.delete.md) — Remove o controle
- [UI\Controls\Box::getOrientation](ui-controls-box.getorientation.md) — Obtém orientação
- [UI\Controls\Box::isPadded](ui-controls-box.ispadded.md) — Detecção de preenchimento
- [UI\Controls\Box::setPadded](ui-controls-box.setpadded.md) — Define o preenchimento

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
