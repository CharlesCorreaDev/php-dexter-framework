# Controle de grade (arranjo)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-grid.php

---

# Controle de grade (arranjo)

(UI 0.9.9)

## Introdução

Uma grade é um controle que permite o arranjo de itens filhos em uma grade.

## Resumo da classe

class **UI\Controls\Grid**

extends
[UI\Control](class.ui-control.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Fill](class.ui-controls-grid.md#ui-controls-grid.constants.fill);

const
[int](language.types.integer.md)
[Start](class.ui-controls-grid.md#ui-controls-grid.constants.start);

const
[int](language.types.integer.md)
[Center](class.ui-controls-grid.md#ui-controls-grid.constants.center);

const
[int](language.types.integer.md)
[End](class.ui-controls-grid.md#ui-controls-grid.constants.end);

const
[int](language.types.integer.md)
[Leading](class.ui-controls-grid.md#ui-controls-grid.constants.leading);

const
[int](language.types.integer.md)
[Top](class.ui-controls-grid.md#ui-controls-grid.constants.top);

const
[int](language.types.integer.md)
[Trailing](class.ui-controls-grid.md#ui-controls-grid.constants.trailing);

const
[int](language.types.integer.md)
[Bottom](class.ui-controls-grid.md#ui-controls-grid.constants.bottom);

/\* Propriedades \*/

protected
[$controls](class.ui-controls-grid.md#ui-controls-grid.props.controls);

/\* Métodos \*/

public function [append](ui-controls-grid.append.md)(  
    [UI\Control](class.ui-control.md) `$control`,  
    [int](language.types.integer.md) `$left`,  
    [int](language.types.integer.md) `$top`,  
    [int](language.types.integer.md) `$xspan`,  
    [int](language.types.integer.md) `$yspan`,  
    [bool](language.types.boolean.md) `$hexpand`,  
    [int](language.types.integer.md) `$halign`,  
    [bool](language.types.boolean.md) `$vexpand`,  
    [int](language.types.integer.md) `$valign`  
)

public function [isPadded](ui-controls-grid.ispadded.md)(): [bool](language.types.boolean.md)

public function [setPadded](ui-controls-grid.setpadded.md)([bool](language.types.boolean.md) `$padding`)

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

**`UI\Controls\Grid::Fill`**

**`UI\Controls\Grid::Start`**

**`UI\Controls\Grid::Center`**

**`UI\Controls\Grid::End`**

**`UI\Controls\Grid::Leading`**

**`UI\Controls\Grid::Top`**

**`UI\Controls\Grid::Trailing`**

**`UI\Controls\Grid::Bottom`**

## Propriedades

controls
:   Contém controles, não pode ser manipulado diretamente.

## Índice

- [UI\Controls\Grid::append](ui-controls-grid.append.md) — Anexa controle
- [UI\Controls\Grid::isPadded](ui-controls-grid.ispadded.md) — Detecção de preenchimento
- [UI\Controls\Grid::setPadded](ui-controls-grid.setpadded.md) — Define preenchimento

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
