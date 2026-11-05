# A classe GmagickPixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gmagickpixel.php

---

# A classe GmagickPixel

(PECL gmagick >= Unknown)

## Introdução

## Resumo da classe

class **GmagickPixel**
{

/\* Métodos \*/

public function [\_\_construct](gmagickpixel.construct.md)([string](language.types.string.md) `$color` = ?)

public function [getcolor](gmagickpixel.getcolor.md)([bool](language.types.boolean.md) `$as_array` = **`false`**, [bool](language.types.boolean.md) `$normalize_array` = **`false`**): [mixed](language.types.mixed.md)

public function [getcolorcount](gmagickpixel.getcolorcount.md)(): [int](language.types.integer.md)

public function [getcolorvalue](gmagickpixel.getcolorvalue.md)([int](language.types.integer.md) `$color`): [float](language.types.float.md)

public function [setcolor](gmagickpixel.setcolor.md)([string](language.types.string.md) `$color`): [GmagickPixel](class.gmagickpixel.md)

public function [setcolorvalue](gmagickpixel.setcolorvalue.md)([int](language.types.integer.md) `$color`, [float](language.types.float.md) `$value`): [GmagickPixel](class.gmagickpixel.md)

}

## Índice

- [GmagickPixel::\_\_construct](gmagickpixel.construct.md) — O construtor GmagickPixel
- [GmagickPixel::getcolor](gmagickpixel.getcolor.md) — Retorna a cor
- [GmagickPixel::getcolorcount](gmagickpixel.getcolorcount.md) — Retorna a contagem de cores associada a esta cor
- [GmagickPixel::getcolorvalue](gmagickpixel.getcolorvalue.md) — Obtém o valor normalizado do canal de cores fornecido
- [GmagickPixel::setcolor](gmagickpixel.setcolor.md) — Define a cor
- [GmagickPixel::setcolorvalue](gmagickpixel.setcolorvalue.md) — Define o valor normalizado de um dos canais

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
