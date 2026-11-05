# Controle de grupo (arranjo)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-group.php

---

# Controle de grupo (arranjo)

(UI 0.9.9)

## Introdução

Um grupo é um contêiner titulado para controles filhos.

## Resumo da classe

class **UI\Controls\Group**

extends
[UI\Control](class.ui-control.md)
{

/\* Propriedades \*/

protected
[$controls](class.ui-controls-group.md#ui-controls-group.props.controls);

/\* Constructor \*/

public function [\_\_construct](ui-controls-group.construct.md)([string](language.types.string.md) `$title`)

/\* Métodos \*/

public function [append](ui-controls-group.append.md)([UI\Control](class.ui-control.md) `$control`)

public function [getTitle](ui-controls-group.gettitle.md)(): [string](language.types.string.md)

public function [hasMargin](ui-controls-group.hasmargin.md)(): [bool](language.types.boolean.md)

public function [setMargin](ui-controls-group.setmargin.md)([bool](language.types.boolean.md) `$margin`)

public function [setTitle](ui-controls-group.settitle.md)([string](language.types.string.md) `$title`)

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
:   Contém controles, não pode ser manipulado diretamente.

## Índice

- [UI\Controls\Group::append](ui-controls-group.append.md) — Anexa controle
- [UI\Controls\Group::\_\_construct](ui-controls-group.construct.md) — Constrói um novo grupo
- [UI\Controls\Group::getTitle](ui-controls-group.gettitle.md) — Obtém título
- [UI\Controls\Group::hasMargin](ui-controls-group.hasmargin.md) — Detecção de margem
- [UI\Controls\Group::setMargin](ui-controls-group.setmargin.md) — Define margem
- [UI\Controls\Group::setTitle](ui-controls-group.settitle.md) — Define título

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
