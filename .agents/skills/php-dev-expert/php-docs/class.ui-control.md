# Controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-control.php

---

# Controle

(UI 0.9.9)

## Introdução

Esta é a classe base fechada para todos os controles de interface do usuário.

## Resumo da classe

final
class **UI\Control**
{

/\* Métodos \*/

public function [destroy](ui-control.destroy.md)()

public function [disable](ui-control.disable.md)()

public function [enable](ui-control.enable.md)()

public function [getParent](ui-control.getparent.md)(): [UI\Control](class.ui-control.md)

public function [getTopLevel](ui-control.gettoplevel.md)(): [int](language.types.integer.md)

public function [hide](ui-control.hide.md)()

public function [isEnabled](ui-control.isenabled.md)(): [bool](language.types.boolean.md)

public function [isVisible](ui-control.isvisible.md)(): [bool](language.types.boolean.md)

public function [setParent](ui-control.setparent.md)([UI\Control](class.ui-control.md) `$parent`)

public function [show](ui-control.show.md)()

}

## Índice

- [UI\Control::destroy](ui-control.destroy.md) — Destrói o controle
- [UI\Control::disable](ui-control.disable.md) — Desabilita o controle
- [UI\Control::enable](ui-control.enable.md) — Habilita o controle
- [UI\Control::getParent](ui-control.getparent.md) — Obtém o controle pai
- [UI\Control::getTopLevel](ui-control.gettoplevel.md) — Obtém o nível mais alto
- [UI\Control::hide](ui-control.hide.md) — Oculta o controle
- [UI\Control::isEnabled](ui-control.isenabled.md) — Determina se o controle está habilitado
- [UI\Control::isVisible](ui-control.isvisible.md) — Determina se o controle está visível
- [UI\Control::setParent](ui-control.setparent.md) — Define o controle pai
- [UI\Control::show](ui-control.show.md) — Exibe o controle

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
