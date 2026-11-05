# Representação de cores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-draw-color.php

---

# Representação de cores

(UI 0.9.9)

## Introdução

Representa cores RGBA, canais individuais são acessíveis através de propriedades públicas.

## Resumo da classe

class **UI\Draw\Color**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Red](class.ui-draw-color.md#ui-draw-color.constants.red);

const
[int](language.types.integer.md)
[Green](class.ui-draw-color.md#ui-draw-color.constants.green);

const
[int](language.types.integer.md)
[Blue](class.ui-draw-color.md#ui-draw-color.constants.blue);

const
[int](language.types.integer.md)
[Alpha](class.ui-draw-color.md#ui-draw-color.constants.alpha);

/\* Propriedades \*/

public
[$r](class.ui-draw-color.md#ui-draw-color.props.r);

public
[$g](class.ui-draw-color.md#ui-draw-color.props.g);

public
[$b](class.ui-draw-color.md#ui-draw-color.props.b);

public
[$a](class.ui-draw-color.md#ui-draw-color.props.a);

/\* Constructor \*/

public function [\_\_construct](ui-draw-color.construct.md)([UI\Draw\Color](class.ui-draw-color.md) `$color` = ?)

public function [\_\_construct](ui-draw-color.construct.md)([int](language.types.integer.md) `$color` = ?)

/\* Métodos \*/

public function [getChannel](ui-draw-color.getchannel.md)([int](language.types.integer.md) `$channel`): [float](language.types.float.md)

public function [setChannel](ui-draw-color.setchannel.md)([int](language.types.integer.md) `$channel`, [float](language.types.float.md) `$value`): [void](language.types.void.md)

}

## Propriedades

r
:   Provê acesso ao canal vermelho

g
:   Provê acesso ao canal verde

b
:   Provê acesso ao canal azul

a
:   Provê acesso ao canal alfa

## Constantes predefinidas

**`UI\Draw\Color::Red`**
:   Identifica o canal vermelho

**`UI\Draw\Color::Green`**
:   Identifica o canal verde

**`UI\Draw\Color::Blue`**
:   Identifica o canal azul

**`UI\Draw\Color::Alpha`**
:   Identifica o canal alfa

## Índice

- [UI\Draw\Color::\_\_construct](ui-draw-color.construct.md) — Constrói uma cor
- [UI\Draw\Color::getChannel](ui-draw-color.getchannel.md) — Obtém canal
- [UI\Draw\Color::setChannel](ui-draw-color.setchannel.md) — Define canal

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
