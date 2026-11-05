# Controle de caixa de giro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-spin.php

---

# Controle de caixa de giro

(UI 0.9.9)

## Introdução

Uma caixa de giro é uma caixa de texto com um controle para cima e para baixo que altera o valor inteiro na caixa, com uma faixa definida.

## Resumo da classe

class **UI\Controls\Spin**

extends
[UI\Control](class.ui-control.md)
{

/\* Constructor \*/

public function [\_\_construct](ui-controls-spin.construct.md)([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`)

/\* Métodos \*/

public function [getValue](ui-controls-spin.getvalue.md)(): [int](language.types.integer.md)

protected function [onChange](ui-controls-spin.onchange.md)()

public function [setValue](ui-controls-spin.setvalue.md)([int](language.types.integer.md) `$value`)

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

- [UI\Controls\Spin::\_\_construct](ui-controls-spin.construct.md) — Constrói uma nova caixa de giro
- [UI\Controls\Spin::getValue](ui-controls-spin.getvalue.md) — Obtém valor
- [UI\Controls\Spin::onChange](ui-controls-spin.onchange.md) — Manipulador de alteração
- [UI\Controls\Spin::setValue](ui-controls-spin.setvalue.md) — Define valor

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
