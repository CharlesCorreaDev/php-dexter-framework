# Representa dimensões (largura, altura)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-size.php

---

# Representa dimensões (largura, altura)

(UI 0.9.9)

## Introdução

Dimensões são usadas pela UI para representar o tamanho de uma tela, de um controle ou de uma área.

## Resumo da classe

final
class **UI\Size**
{

/\* Propriedades \*/

public
[$width](class.ui-size.md#ui-size.props.width);

public
[$height](class.ui-size.md#ui-size.props.height);

/\* Constructor \*/

public function [\_\_construct](ui-size.construct.md)([float](language.types.float.md) `$width`, [float](language.types.float.md) `$height`)

/\* Métodos \*/

public function [getHeight](ui-size.getheight.md)(): [float](language.types.float.md)

public function [getWidth](ui-size.getwidth.md)(): [float](language.types.float.md)

public static function [of](ui-size.of.md)([float](language.types.float.md) `$size`): [UI\Size](class.ui-size.md)

public static function [of](ui-size.of.md)([UI\Point](class.ui-point.md) `$point`): [UI\Size](class.ui-size.md)

public function [setHeight](ui-size.setheight.md)([float](language.types.float.md) `$size`)

public function [setWidth](ui-size.setwidth.md)([float](language.types.float.md) `$size`)

}

## Propriedades

width
:   Contém a largura, pode ser lida/escrita diretamente.

height
:   Contém a altura, pode ser lida/escrita diretamente.

## Índice

- [UI\Size::\_\_construct](ui-size.construct.md) — Constrói uma nova dimensão
- [UI\Size::getHeight](ui-size.getheight.md) — Recupera altura
- [UI\Size::getWidth](ui-size.getwidth.md) — Recupera largura
- [UI\Size::of](ui-size.of.md) — Coerção de ponto
- [UI\Size::setHeight](ui-size.setheight.md) — Define altura
- [UI\Size::setWidth](ui-size.setwidth.md) — Define largura

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
