# Identificadores de tecla

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-key.php

---

# Identificadores de tecla

(UI 1.0.0)

## Introdução

## Resumo da classe

final
class **UI\Key**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[Escape](class.ui-key.md#ui-key.constants.escape);

const
[int](language.types.integer.md)
[Insert](class.ui-key.md#ui-key.constants.insert);

const
[int](language.types.integer.md)
[Delete](class.ui-key.md#ui-key.constants.delete);

const
[int](language.types.integer.md)
[Home](class.ui-key.md#ui-key.constants.home);

const
[int](language.types.integer.md)
[End](class.ui-key.md#ui-key.constants.end);

const
[int](language.types.integer.md)
[PageUp](class.ui-key.md#ui-key.constants.pageup);

const
[int](language.types.integer.md)
[PageDown](class.ui-key.md#ui-key.constants.pagedown);

const
[int](language.types.integer.md)
[Up](class.ui-key.md#ui-key.constants.up);

const
[int](language.types.integer.md)
[Down](class.ui-key.md#ui-key.constants.down);

const
[int](language.types.integer.md)
[Left](class.ui-key.md#ui-key.constants.left);

const
[int](language.types.integer.md)
[Right](class.ui-key.md#ui-key.constants.right);

const
[int](language.types.integer.md)
[F1](class.ui-key.md#ui-key.constants.f1);

const
[int](language.types.integer.md)
[F2](class.ui-key.md#ui-key.constants.f2);

const
[int](language.types.integer.md)
[F3](class.ui-key.md#ui-key.constants.f3);

const
[int](language.types.integer.md)
[F4](class.ui-key.md#ui-key.constants.f4);

const
[int](language.types.integer.md)
[F5](class.ui-key.md#ui-key.constants.f5);

const
[int](language.types.integer.md)
[F6](class.ui-key.md#ui-key.constants.f6);

const
[int](language.types.integer.md)
[F7](class.ui-key.md#ui-key.constants.f7);

const
[int](language.types.integer.md)
[F8](class.ui-key.md#ui-key.constants.f8);

const
[int](language.types.integer.md)
[F9](class.ui-key.md#ui-key.constants.f9);

const
[int](language.types.integer.md)
[F10](class.ui-key.md#ui-key.constants.f10);

const
[int](language.types.integer.md)
[F11](class.ui-key.md#ui-key.constants.f11);

const
[int](language.types.integer.md)
[F12](class.ui-key.md#ui-key.constants.f12);

const
[int](language.types.integer.md)
[N0](class.ui-key.md#ui-key.constants.n0);

const
[int](language.types.integer.md)
[N1](class.ui-key.md#ui-key.constants.n1);

const
[int](language.types.integer.md)
[N2](class.ui-key.md#ui-key.constants.n2);

const
[int](language.types.integer.md)
[N3](class.ui-key.md#ui-key.constants.n3);

const
[int](language.types.integer.md)
[N4](class.ui-key.md#ui-key.constants.n4);

const
[int](language.types.integer.md)
[N5](class.ui-key.md#ui-key.constants.n5);

const
[int](language.types.integer.md)
[N6](class.ui-key.md#ui-key.constants.n6);

const
[int](language.types.integer.md)
[N7](class.ui-key.md#ui-key.constants.n7);

const
[int](language.types.integer.md)
[N8](class.ui-key.md#ui-key.constants.n8);

const
[int](language.types.integer.md)
[N9](class.ui-key.md#ui-key.constants.n9);

const
[int](language.types.integer.md)
[NDot](class.ui-key.md#ui-key.constants.ndot);

const
[int](language.types.integer.md)
[NEnter](class.ui-key.md#ui-key.constants.nenter);

const
[int](language.types.integer.md)
[NAdd](class.ui-key.md#ui-key.constants.nadd);

const
[int](language.types.integer.md)
[NSubtract](class.ui-key.md#ui-key.constants.nsubtract);

const
[int](language.types.integer.md)
[NMultiply](class.ui-key.md#ui-key.constants.nmultiply);

const
[int](language.types.integer.md)
[NDivide](class.ui-key.md#ui-key.constants.ndivide);

}

## Constantes predefinidas

**`UI\Key::Escape`**

**`UI\Key::Insert`**

**`UI\Key::Delete`**

**`UI\Key::Home`**

**`UI\Key::End`**

**`UI\Key::PageUp`**

**`UI\Key::PageDown`**

**`UI\Key::Up`**

**`UI\Key::Down`**

**`UI\Key::Left`**

**`UI\Key::Right`**

**`UI\Key::F1`**

**`UI\Key::F2`**

**`UI\Key::F3`**

**`UI\Key::F4`**

**`UI\Key::F5`**

**`UI\Key::F6`**

**`UI\Key::F7`**

**`UI\Key::F8`**

**`UI\Key::F9`**

**`UI\Key::F10`**

**`UI\Key::F11`**

**`UI\Key::F12`**

**`UI\Key::N0`**

**`UI\Key::N1`**

**`UI\Key::N2`**

**`UI\Key::N3`**

**`UI\Key::N4`**

**`UI\Key::N5`**

**`UI\Key::N6`**

**`UI\Key::N7`**

**`UI\Key::N8`**

**`UI\Key::N9`**

**`UI\Key::NDot`**

**`UI\Key::NEnter`**

**`UI\Key::NAdd`**

**`UI\Key::NSubtract`**

**`UI\Key::NMultiply`**

**`UI\Key::NDivide`**

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
