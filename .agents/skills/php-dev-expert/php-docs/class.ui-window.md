# Janela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-window.php

---

# Janela

(UI 0.9.9)

## Introdução

Representa uma janela da UI.

## Resumo da classe

class **UI\Window**

extends
[UI\Control](class.ui-control.md)
{

/\* Propriedades \*/

protected
[$controls](class.ui-window.md#ui-window.props.controls);

/\* Constructor \*/

public function [\_\_construct](ui-window.construct.md)([string](language.types.string.md) `$title`, Size `$size`, [bool](language.types.boolean.md) `$menu` = **`false`**)

/\* Métodos \*/

public function [add](ui-window.add.md)([UI\Control](class.ui-control.md) `$control`)

public function [error](ui-window.error.md)([string](language.types.string.md) `$title`, [string](language.types.string.md) `$msg`)

public function [getSize](ui-window.getsize.md)(): [UI\Size](class.ui-size.md)

public function [getTitle](ui-window.gettitle.md)(): [string](language.types.string.md)

public function [hasBorders](ui-window.hasborders.md)(): [bool](language.types.boolean.md)

public function [hasMargin](ui-window.hasmargin.md)(): [bool](language.types.boolean.md)

public function [isFullScreen](ui-window.isfullscreen.md)(): [bool](language.types.boolean.md)

public function [msg](ui-window.msg.md)([string](language.types.string.md) `$title`, [string](language.types.string.md) `$msg`)

protected function [onClosing](ui-window.onclosing.md)(): [int](language.types.integer.md)

public function [open](ui-window.open.md)(): [string](language.types.string.md)

public function [save](ui-window.save.md)(): [string](language.types.string.md)

public function [setBorders](ui-window.setborders.md)([bool](language.types.boolean.md) `$borders`)

public function [setFullScreen](ui-window.setfullscreen.md)([bool](language.types.boolean.md) `$full`)

public function [setMargin](ui-window.setmargin.md)([bool](language.types.boolean.md) `$margin`)

public function [setSize](ui-window.setsize.md)([UI\Size](class.ui-size.md) `$size`)

public function [setTitle](ui-window.settitle.md)([string](language.types.string.md) `$title`)

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

- [UI\Window::add](ui-window.add.md) — Adiciona um controle
- [UI\Window::\_\_construct](ui-window.construct.md) — Constrói uma nova janela
- [UI\Window::error](ui-window.error.md) — Mostra caixa de erro
- [UI\Window::getSize](ui-window.getsize.md) — Obtém dimensão de janela
- [UI\Window::getTitle](ui-window.gettitle.md) — Obtém título
- [UI\Window::hasBorders](ui-window.hasborders.md) — Detecção de borda
- [UI\Window::hasMargin](ui-window.hasmargin.md) — Detecção de margem
- [UI\Window::isFullScreen](ui-window.isfullscreen.md) — Detecção de tela cheia
- [UI\Window::msg](ui-window.msg.md) — Mostra caixa de mensagem
- [UI\Window::onClosing](ui-window.onclosing.md) — Função de retorno de fechamento
- [UI\Window::open](ui-window.open.md) — Caixa de diálogo de abertura
- [UI\Window::save](ui-window.save.md) — Caixa de diálogo de salvamento
- [UI\Window::setBorders](ui-window.setborders.md) — Uso de bordas
- [UI\Window::setFullScreen](ui-window.setfullscreen.md) — Uso de tela cheia
- [UI\Window::setMargin](ui-window.setmargin.md) — Uso de margem
- [UI\Window::setSize](ui-window.setsize.md) — Define dimensão
- [UI\Window::setTitle](ui-window.settitle.md) — Título da janela

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
