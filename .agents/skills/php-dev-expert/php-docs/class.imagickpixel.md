# A classe ImagickPixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.imagickpixel.php

---

# A classe [ImagickPixel](class.imagickpixel.md)

(PECL imagick 2, PECL imagick 3)

## Resumo da classe

class **ImagickPixel**
{

public function [clear](imagickpixel.clear.md)(): [bool](language.types.boolean.md)

public function [\_\_construct](imagickpixel.construct.md)([string](language.types.string.md) `$color` = ?)

public function [destroy](imagickpixel.destroy.md)(): [bool](language.types.boolean.md)

public function [getColor](imagickpixel.getcolor.md)([int](language.types.integer.md) `$normalized` = 0): [array](language.types.array.md)

public function [getColorAsString](imagickpixel.getcolorasstring.md)(): [string](language.types.string.md)

public function [getColorCount](imagickpixel.getcolorcount.md)(): [int](language.types.integer.md)

public function [getColorQuantum](imagickpixel.getcolorquantum.md)(): [array](language.types.array.md)

public function [getColorValue](imagickpixel.getcolorvalue.md)([int](language.types.integer.md) `$color`): [float](language.types.float.md)

public function [getColorValueQuantum](imagickpixel.getcolorvaluequantum.md)([int](language.types.integer.md) `$color`): [int](language.types.integer.md)|[float](language.types.float.md)

public function [getHSL](imagickpixel.gethsl.md)(): [array](language.types.array.md)

public function [getIndex](imagickpixel.getindex.md)(): [int](language.types.integer.md)

public function [isPixelSimilar](imagickpixel.ispixelsimilar.md)([ImagickPixel](class.imagickpixel.md) `$color`, [float](language.types.float.md) `$fuzz`): [bool](language.types.boolean.md)

public function [isPixelSimilarQuantum](imagickpixel.ispixelsimilarquantum.md)([string](language.types.string.md) `$color`, [string](language.types.string.md) `$fuzz` = ?): [bool](language.types.boolean.md)

public function [isSimilar](imagickpixel.issimilar.md)([ImagickPixel](class.imagickpixel.md) `$color`, [float](language.types.float.md) `$fuzz`): [bool](language.types.boolean.md)

public function [setColor](imagickpixel.setcolor.md)([string](language.types.string.md) `$color`): [bool](language.types.boolean.md)

public function [setcolorcount](imagickpixel.setcolorcount.md)([int](language.types.integer.md) `$colorCount`): [bool](language.types.boolean.md)

public function [setColorValue](imagickpixel.setcolorvalue.md)([int](language.types.integer.md) `$color`, [float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

public function [setColorValueQuantum](imagickpixel.setcolorvaluequantum.md)([int](language.types.integer.md) `$color`, [int](language.types.integer.md)|[float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

public function [setHSL](imagickpixel.sethsl.md)([float](language.types.float.md) `$hue`, [float](language.types.float.md) `$saturation`, [float](language.types.float.md) `$luminosity`): [bool](language.types.boolean.md)

public function [setIndex](imagickpixel.setindex.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

}

## Índice

- [ImagickPixel::clear](imagickpixel.clear.md) — Limpa recursos associados a este objeto
- [ImagickPixel::\_\_construct](imagickpixel.construct.md) — O construtor de ImagickPixel
- [ImagickPixel::destroy](imagickpixel.destroy.md) — Desaloca recursos associados a este objeto
- [ImagickPixel::getColor](imagickpixel.getcolor.md) — Retorna a cor
- [ImagickPixel::getColorAsString](imagickpixel.getcolorasstring.md) — Retorna a cor como uma string
- [ImagickPixel::getColorCount](imagickpixel.getcolorcount.md) — Retorna a contagem de cores associada a esta cor
- [ImagickPixel::getColorQuantum](imagickpixel.getcolorquantum.md) — Retorna a cor do pixel em um array como valores Quantum
- [ImagickPixel::getColorValue](imagickpixel.getcolorvalue.md) — Obtém o valor normalizado do canal de cores fornecido
- [ImagickPixel::getColorValueQuantum](imagickpixel.getcolorvaluequantum.md) — Obtém o valor Quantum de uma cor no ImagickPixel
- [ImagickPixel::getHSL](imagickpixel.gethsl.md) — Retorna a cor HSL normalizada do objeto ImagickPixel
- [ImagickPixel::getIndex](imagickpixel.getindex.md) — Obtém o índice do mapa de cores da varinha de pixel
- [ImagickPixel::isPixelSimilar](imagickpixel.ispixelsimilar.md) — Verifica a distância entre esta cor e uma outra
- [ImagickPixel::isPixelSimilarQuantum](imagickpixel.ispixelsimilarquantum.md) — Retorna se duas cores diferem em menos que a distância especificada
- [ImagickPixel::isSimilar](imagickpixel.issimilar.md) — Verifica a distância entre esta cor e uma outra
- [ImagickPixel::setColor](imagickpixel.setcolor.md) — Define a cor
- [ImagickPixel::setColorCount](imagickpixel.setcolorcount.md) — Define a contagem de cores associada a esta cor
- [ImagickPixel::setColorValue](imagickpixel.setcolorvalue.md) — Define o valor normalizado de um dos canais
- [ImagickPixel::setColorValueQuantum](imagickpixel.setcolorvaluequantum.md) — Define o valor Quantum de um elemento de cor do ImagickPixel
- [ImagickPixel::setHSL](imagickpixel.sethsl.md) — Define a cor HSL normalizada
- [ImagickPixel::setIndex](imagickpixel.setindex.md) — Define o índice do mapa de cores da varinha de pixel

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
