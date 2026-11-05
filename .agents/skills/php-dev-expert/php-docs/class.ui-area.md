# Área

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-area.php

---

# Área

(UI 0.9.9)

## Introdução

Uma classe Area (área) representa uma tela que pode ser usada para desenhar e responder a eventos de mouse e teclado.

## Resumo da classe

class **UI\Area**

extends
[UI\Control](class.ui-control.md)
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Ctrl](class.ui-area.md#ui-area.constants.ctrl);

const
[int](language.types.integer.md)
[Alt](class.ui-area.md#ui-area.constants.alt);

const
[int](language.types.integer.md)
[Shift](class.ui-area.md#ui-area.constants.shift);

const
[int](language.types.integer.md)
[Super](class.ui-area.md#ui-area.constants.super);

const
[int](language.types.integer.md)
[Down](class.ui-area.md#ui-area.constants.down);

const
[int](language.types.integer.md)
[Up](class.ui-area.md#ui-area.constants.up);

/\* Métodos \*/

protected function [onDraw](ui-area.ondraw.md)(  
    [UI\Draw\Pen](class.ui-draw-pen.md) `$pen`,  
    [UI\Size](class.ui-size.md) `$areaSize`,  
    [UI\Point](class.ui-point.md) `$clipPoint`,  
    [UI\Size](class.ui-size.md) `$clipSize`  
)

protected function [onKey](ui-area.onkey.md)([string](language.types.string.md) `$key`, [int](language.types.integer.md) `$ext`, [int](language.types.integer.md) `$flags`)

protected function [onMouse](ui-area.onmouse.md)([UI\Point](class.ui-point.md) `$areaPoint`, [UI\Size](class.ui-size.md) `$areaSize`, [int](language.types.integer.md) `$flags`)

public function [redraw](ui-area.redraw.md)()

public function [scrollTo](ui-area.scrollto.md)([UI\Point](class.ui-point.md) `$point`, [UI\Size](class.ui-size.md) `$size`)

public function [setSize](ui-area.setsize.md)([UI\Size](class.ui-size.md) `$size`)

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

**`UI\Area::Ctrl`**
:   Definida nos modificadores passados para eventos de teclado e mouse
    quando a tecla `CTRL` está ativa

**`UI\Area::Alt`**
:   Definida nos modificadores passados para eventos de teclado e mouse
    quando a tecla `ALT` está ativa

**`UI\Area::Shift`**
:   Definida nos modificadores passados para eventos de teclado e mouse
    quando a tecla `SHIFT` está ativa

**`UI\Area::Super`**

**`UI\Area::Down`**
:   Definida nos modificadores passados para eventos de teclado e mouse

**`UI\Area::Up`**
:   Definida nos modificadores passados para eventos de teclado e mouse

## Índice

- [UI\Area::onDraw](ui-area.ondraw.md) — Função de retorno de desenho
- [UI\Area::onKey](ui-area.onkey.md) — Função de retorno de tecla
- [UI\Area::onMouse](ui-area.onmouse.md) — Função de retorno de mouse
- [UI\Area::redraw](ui-area.redraw.md) — Redesenha área
- [UI\Area::scrollTo](ui-area.scrollto.md) — Rolagem da áre
- [UI\Area::setSize](ui-area.setsize.md) — Define a dimensão da área

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
