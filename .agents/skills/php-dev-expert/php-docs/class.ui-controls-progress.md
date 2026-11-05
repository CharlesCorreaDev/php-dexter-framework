# Controle de progresso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-progress.php

---

# Controle de progresso

(UI 0.9.9)

## Introdução

Um controle de progresso é uma barra de progresso já familiar: representa o progresso como uma porcentagem com um intervalo possível de 0 a 100 (inclusive).

## Resumo da classe

class **UI\Controls\Progress**

extends
[UI\Control](class.ui-control.md)
{

/\* Métodos \*/

public function [getValue](ui-controls-progress.getvalue.md)(): [int](language.types.integer.md)

public function [setValue](ui-controls-progress.setvalue.md)([int](language.types.integer.md) `$value`)

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

- [UI\Controls\Progress::getValue](ui-controls-progress.getvalue.md) — Obtém valor
- [UI\Controls\Progress::setValue](ui-controls-progress.setvalue.md) — Define valor

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
