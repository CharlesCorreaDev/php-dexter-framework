# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/image.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`GD_VERSION`** ([string](language.types.string.md))
:   A versão da biblioteca GD que foi compilada com o PHP.

**`GD_MAJOR_VERSION`** ([int](language.types.integer.md))
:   A maior versão da biblioteca GD compilada com o PHP.

**`GD_MINOR_VERSION`** ([int](language.types.integer.md))
:   A menor versão da biblioteca GD compilada com o PHP.

**`GD_RELEASE_VERSION`** ([int](language.types.integer.md))
:   A versão release da biblioteca GD compilada com o PHP.

**`GD_EXTRA_VERSION`** ([string](language.types.string.md))
:   A versão "extra" da biblioteca GD (beta/rc..) compilada com o PHP.

**`GD_BUNDLED`** ([int](language.types.integer.md))
:   1 quando for uma versão incorporada do GD e
    0 nos demais casos.

**`IMG_AVIF`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

    (Disponível a partir do PHP 8.1.0.)

**`IMG_BMP`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

**`IMG_GIF`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

**`IMG_JPG`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

**`IMG_JPEG`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

    > **Nota**:
    >
    > Esta constante tem o mesmo valor que **`IMG_JPG`**

**`IMG_PNG`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

**`IMG_TGA`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

    (Disponível a partir do PHP 7.4.0)

**`IMG_WBMP`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

**`IMG_XPM`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

**`IMG_WEBP`** ([int](language.types.integer.md))
:   Usada como valor retornado por [imagetypes()](function.imagetypes.md).

    (Disponível a partir do PHP 7.0.10.)

**`IMG_WEBP_LOSSLESS`** ([int](language.types.integer.md))
:   (Disponível a partir do PHP 8.1.0.)

**`IMG_COLOR_TILED`** ([int](language.types.integer.md))
:   Opção de cor especial que pode ser usada em vez de uma cor alocada com
    [imagecolorallocate()](function.imagecolorallocate.md) ou
    [imagecolorallocatealpha()](function.imagecolorallocatealpha.md).

**`IMG_COLOR_STYLED`** ([int](language.types.integer.md))
:   Opção de cor especial que pode ser usada em vez de uma cor alocada com
    [imagecolorallocate()](function.imagecolorallocate.md) ou
    [imagecolorallocatealpha()](function.imagecolorallocatealpha.md).

**`IMG_COLOR_BRUSHED`** ([int](language.types.integer.md))
:   Opção de cor especial que pode ser usada em vez de uma cor alocada com
    [imagecolorallocate()](function.imagecolorallocate.md) ou
    [imagecolorallocatealpha()](function.imagecolorallocatealpha.md).

**`IMG_COLOR_STYLEDBRUSHED`** ([int](language.types.integer.md))
:   Opção de cor especial que pode ser usada em vez de uma cor alocada com
    [imagecolorallocate()](function.imagecolorallocate.md) ou
    [imagecolorallocatealpha()](function.imagecolorallocatealpha.md).

**`IMG_COLOR_TRANSPARENT`** ([int](language.types.integer.md))
:   Opção de cor especial que pode ser usada em vez de uma cor alocada com
    [imagecolorallocate()](function.imagecolorallocate.md) ou
    [imagecolorallocatealpha()](function.imagecolorallocatealpha.md).

**`IMG_AFFINE_TRANSLATE`** ([int](language.types.integer.md))
:   Uma constante de tipo de transformação afim usada pela função [imageaffinematrixget()](function.imageaffinematrixget.md).

**`IMG_AFFINE_SCALE`** ([int](language.types.integer.md))
:   Uma constante de tipo de transformação afim usada pela função [imageaffinematrixget()](function.imageaffinematrixget.md).

**`IMG_AFFINE_ROTATE`** ([int](language.types.integer.md))
:   Uma constante de tipo de transformação afim usada pela função [imageaffinematrixget()](function.imageaffinematrixget.md).

**`IMG_AFFINE_SHEAR_HORIZONTAL`** ([int](language.types.integer.md))
:   Uma constante de tipo de transformação afim usada pela função [imageaffinematrixget()](function.imageaffinematrixget.md).

**`IMG_AFFINE_SHEAR_VERTICAL`** ([int](language.types.integer.md))
:   Uma constante de tipo de transformação afim usada pela função [imageaffinematrixget()](function.imageaffinematrixget.md).

**`IMG_ARC_ROUNDED`** ([int](language.types.integer.md))
:   Uma constante de estilo usada pela função [imagefilledarc()](function.imagefilledarc.md).

    > **Nota**:
    >
    > Esta constante tem o mesmo valor de **`IMG_ARC_PIE`**

**`IMG_ARC_PIE`** ([int](language.types.integer.md))
:   Uma constante de estilo usada pela função [imagefilledarc()](function.imagefilledarc.md).

**`IMG_ARC_CHORD`** ([int](language.types.integer.md))
:   Uma constante de estilo usada pela função [imagefilledarc()](function.imagefilledarc.md).

**`IMG_ARC_NOFILL`** ([int](language.types.integer.md))
:   Uma constante de estilo usada pela função [imagefilledarc()](function.imagefilledarc.md).

**`IMG_ARC_EDGED`** ([int](language.types.integer.md))
:   Uma constante de estilo usada pela função [imagefilledarc()](function.imagefilledarc.md).

**`IMG_GD2_RAW`** ([int](language.types.integer.md))
:   Uma constante de tipo usada pela função [imagegd2()](function.imagegd2.md).

**`IMG_GD2_COMPRESSED`** ([int](language.types.integer.md))
:   Uma constante de tipo usada pela função [imagegd2()](function.imagegd2.md).

**`IMG_EFFECT_REPLACE`** ([int](language.types.integer.md))
:   Efeito de mesclagem alfa usado pela função [imagelayereffect()](function.imagelayereffect.md).

**`IMG_EFFECT_ALPHABLEND`** ([int](language.types.integer.md))
:   Efeito de mesclagem alfa usado pela função [imagelayereffect()](function.imagelayereffect.md).

**`IMG_EFFECT_NORMAL`** ([int](language.types.integer.md))
:   Efeito de mesclagem alfa usado pela função [imagelayereffect()](function.imagelayereffect.md).

**`IMG_EFFECT_OVERLAY`** ([int](language.types.integer.md))
:   Efeito de mesclagem alfa usado pela função [imagelayereffect()](function.imagelayereffect.md).

**`IMG_EFFECT_MULTIPLY`** ([int](language.types.integer.md))
:   Efeito de mesclagem alfa usado pela função [imagelayereffect()](function.imagelayereffect.md).

**`IMG_FILTER_NEGATE`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_GRAYSCALE`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_BRIGHTNESS`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_CONTRAST`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_COLORIZE`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_EDGEDETECT`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_GAUSSIAN_BLUR`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_SELECTIVE_BLUR`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_EMBOSS`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_MEAN_REMOVAL`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_SMOOTH`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_PIXELATE`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

**`IMG_FILTER_SCATTER`** ([int](language.types.integer.md))
:   Filtro GD especial usado pela função [imagefilter()](function.imagefilter.md).

    (Disponível a partir do PHP 7.4.0)

**`IMAGETYPE_GIF`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_JPEG`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_JPEG2000`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_PNG`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_SWF`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_PSD`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_BMP`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_WBMP`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_XBM`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_TIFF_II`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_TIFF_MM`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_IFF`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_JB2`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_JPC`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_JP2`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_JPX`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_SWC`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_ICO`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_WEBP`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

    (Diponível no PHP 7.1.0)

**`IMAGETYPE_AVIF`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

    (Disponível a partir do PHP 8.1.0)

**`IMAGETYPE_HEIF`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

    (Disponível a partir do PHP 8.5.0)

**`IMAGETYPE_UNKNOWN`** ([int](language.types.integer.md))
:   Constante do tipo de imagem usada pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
    e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`IMAGETYPE_COUNT`** ([int](language.types.integer.md))
:   O número de constantes de tipos de imagem (incluindo o tipo "desconhecido")
    suportadas pelas funções [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md) e [image\_type\_to\_extension()](function.image-type-to-extension.md).

**`PNG_NO_FILTER`** ([int](language.types.integer.md))
:   Um filtro PNG especial usado pela função [imagepng()](function.imagepng.md).

**`PNG_FILTER_NONE`** ([int](language.types.integer.md))
:   Um filtro PNG especial usado pela função [imagepng()](function.imagepng.md).

**`PNG_FILTER_SUB`** ([int](language.types.integer.md))
:   Um filtro PNG especial usado pela função [imagepng()](function.imagepng.md).

**`PNG_FILTER_UP`** ([int](language.types.integer.md))
:   Um filtro PNG especial usado pela função [imagepng()](function.imagepng.md).

**`PNG_FILTER_AVG`** ([int](language.types.integer.md))
:   Um filtro PNG especial usado pela função [imagepng()](function.imagepng.md).

**`PNG_FILTER_PAETH`** ([int](language.types.integer.md))
:   Um filtro PNG especial usado pela função [imagepng()](function.imagepng.md).

**`PNG_ALL_FILTERS`** ([int](language.types.integer.md))
:   Um filtro PNG especial usado pela função [imagepng()](function.imagepng.md).

**`IMG_FLIP_VERTICAL`** ([int](language.types.integer.md))
:   Usada junto com [imageflip()](function.imageflip.md), disponível a partir do PHP 5.5.0.

**`IMG_FLIP_HORIZONTAL`** ([int](language.types.integer.md))
:   Usada junto com [imageflip()](function.imageflip.md), disponível a partir do PHP 5.5.0.

**`IMG_FLIP_BOTH`** ([int](language.types.integer.md))
:   Usada junto com [imageflip()](function.imageflip.md), disponível a partir do PHP 5.5.0.

**`IMG_BELL`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_BESSEL`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_BILINEAR_FIXED`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_BICUBIC`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_BICUBIC_FIXED`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_BLACKMAN`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_BOX`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_BSPLINE`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_CATMULLROM`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_GAUSSIAN`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_GENERALIZED_CUBIC`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_HERMITE`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_HAMMING`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_HANNING`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_MITCHELL`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_POWER`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_QUADRATIC`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_SINC`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_NEAREST_NEIGHBOUR`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_WEIGHTED4`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_TRIANGLE`** ([int](language.types.integer.md))
:   Usada junto com [imagesetinterpolation()](function.imagesetinterpolation.md), disponível a partir do PHP 5.5.0.

**`IMG_CROP_BLACK`** ([int](language.types.integer.md))
:   Recorta um fundo preto.

**`IMG_CROP_DEFAULT`** ([int](language.types.integer.md))
:   O mesmo que **`IMG_CROP_TRANSPARENT`**.
    Antes do PHP 7.4.0, a libgd incluída convertia para **`IMG_CROP_SIDES`**,
    caso a imagem não tivesse cor transparente.

**`IMG_CROP_SIDES`** ([int](language.types.integer.md))
:   Usa os 4 cantos da imagem para tentar detectar o fundo a ser recortado.

**`IMG_CROP_THRESHOLD`** ([int](language.types.integer.md))
:   Recorta uma imagem usando o limite (informado em `threshold`)
    e a cor (informada em `color`).

**`IMG_CROP_TRANSPARENT`** ([int](language.types.integer.md))
:   Recorta um fundo transparente.

**`IMG_CROP_WHITE`** ([int](language.types.integer.md))
:   Recorta um fundo branco.

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
