# Controle de guia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-tab.php

---

# Controle de guia

(UI 0.9.9)

## Introdução

Uma guia pode conter muitas páginas de controles, cada uma com um título e selecionável pelo usuário.

## Resumo da classe

class **UI\Controls\Tab**

extends
[UI\Control](class.ui-control.md)
{

/\* Propriedades \*/

protected
[$controls](class.ui-controls-tab.md#ui-controls-tab.props.controls);

/\* Métodos \*/

public function [append](ui-controls-tab.append.md)([string](language.types.string.md) `$name`, [UI\Control](class.ui-control.md) `$control`): [int](language.types.integer.md)

public function [delete](ui-controls-tab.delete.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [hasMargin](ui-controls-tab.hasmargin.md)([int](language.types.integer.md) `$page`): [bool](language.types.boolean.md)

public function [insertAt](ui-controls-tab.insertat.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$page`, [UI\Control](class.ui-control.md) `$control`)

public function [pages](ui-controls-tab.pages.md)(): [int](language.types.integer.md)

public function [setMargin](ui-controls-tab.setmargin.md)([int](language.types.integer.md) `$page`, [bool](language.types.boolean.md) `$margin`)

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

- [UI\Controls\Tab::append](ui-controls-tab.append.md) — Anexa página
- [UI\Controls\Tab::delete](ui-controls-tab.delete.md) — Remove página
- [UI\Controls\Tab::hasMargin](ui-controls-tab.hasmargin.md) — Detecção de margem
- [UI\Controls\Tab::insertAt](ui-controls-tab.insertat.md) — Insere página
- [UI\Controls\Tab::pages](ui-controls-tab.pages.md) — Contagem de páginas
- [UI\Controls\Tab::setMargin](ui-controls-tab.setmargin.md) — Define margem

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
