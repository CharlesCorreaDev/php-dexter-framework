# Controle de caixa de verificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-controls-check.php

---

# Controle de caixa de verificação

(UI 0.9.9)

## Introdução

É uma caixa de verificação com rótulo, marcável.

## Resumo da classe

class **UI\Controls\Check**

extends
[UI\Control](class.ui-control.md)
{

/\* Constructor \*/

public function [\_\_construct](ui-controls-check.construct.md)([string](language.types.string.md) `$text`)

/\* Métodos \*/

public function [getText](ui-controls-check.gettext.md)(): [string](language.types.string.md)

public function [isChecked](ui-controls-check.ischecked.md)(): [bool](language.types.boolean.md)

protected function [onToggle](ui-controls-check.ontoggle.md)()

public function [setChecked](ui-controls-check.setchecked.md)([bool](language.types.boolean.md) `$checked`)

public function [setText](ui-controls-check.settext.md)([string](language.types.string.md) `$text`)

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

- [UI\Controls\Check::\_\_construct](ui-controls-check.construct.md) — Constrói uma nova caixa de verificação
- [UI\Controls\Check::getText](ui-controls-check.gettext.md) — Obtém texto
- [UI\Controls\Check::isChecked](ui-controls-check.ischecked.md) — Detecção de caixa marcada
- [UI\Controls\Check::onToggle](ui-controls-check.ontoggle.md) — Função de retorno de marcação de caixa de verificação
- [UI\Controls\Check::setChecked](ui-controls-check.setchecked.md) — Muda o status da caixa de verificação
- [UI\Controls\Check::setText](ui-controls-check.settext.md) — Define o texto

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
