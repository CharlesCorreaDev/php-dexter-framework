# Representa uma posição (x,y)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ui-point.php

---

# Representa uma posição (x,y)

(UI 0.9.9)

## Introdução

Pontos são usados pela UI para representar coordenadas em uma tela, um controle ou uma área.

## Resumo da classe

final
class **UI\Point**
{

/\* Propriedades \*/

public
[$x](class.ui-point.md#ui-point.props.x);

public
[$y](class.ui-point.md#ui-point.props.y);

/\* Constructor \*/

public function [\_\_construct](ui-point.construct.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`)

/\* Métodos \*/

public static function [at](ui-point.at.md)([float](language.types.float.md) `$point`): [UI\Point](class.ui-point.md)

public static function [at](ui-point.at.md)([UI\Size](class.ui-size.md) `$size`): [UI\Point](class.ui-point.md)

public function [getX](ui-point.getx.md)(): [float](language.types.float.md)

public function [getY](ui-point.gety.md)(): [float](language.types.float.md)

public function [setX](ui-point.setx.md)([float](language.types.float.md) `$point`)

public function [setY](ui-point.sety.md)([float](language.types.float.md) `$point`)

}

## Propriedades

x
:   Contém a coordenada X, pode ser lida/escrita diretamente.

y
:   Contém a coordenada Y, pode ser lida/escrita diretamente.

## Índice

- [UI\Point::at](ui-point.at.md) — Coerção de dimensão
- [UI\Point::\_\_construct](ui-point.construct.md) — Constrói um novo ponto
- [UI\Point::getX](ui-point.getx.md) — Recupera X
- [UI\Point::getY](ui-point.gety.md) — Recupera Y
- [UI\Point::setX](ui-point.setx.md) — Define X
- [UI\Point::setY](ui-point.sety.md) — Define Y

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
