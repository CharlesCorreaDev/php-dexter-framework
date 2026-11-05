# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Constantes **`COLOR_*`****

Constantes de tipo de cor. Estas constantes são usadas principalmente com
[ImagickPixel](class.imagickpixel.md).

**`imagick::COLOR_BLACK`** ([int](language.types.integer.md))
:   Cor preta

**`imagick::COLOR_BLUE`** ([int](language.types.integer.md))
:   Cor azul

**`imagick::COLOR_CYAN`** ([int](language.types.integer.md))
:   Cor ciano

**`imagick::COLOR_GREEN`** ([int](language.types.integer.md))
:   Cor verde

**`imagick::COLOR_RED`** ([int](language.types.integer.md))
:   Cor vermelha

**`imagick::COLOR_YELLOW`** ([int](language.types.integer.md))
:   Cor amarela

**`imagick::COLOR_MAGENTA`** ([int](language.types.integer.md))
:   Cor magenta

**`imagick::COLOR_OPACITY`** ([int](language.types.integer.md))
:   Opacidade da cor

**`imagick::COLOR_ALPHA`** ([int](language.types.integer.md))
:   Alfa da cor

**`imagick::COLOR_FUZZ`** ([int](language.types.integer.md))
:   Fuzz da cor

**Constantes **`DISPOSE_*`**DISPOSE**

Constantes de tipo de descarte

**`imagick::DISPOSE_UNRECOGNIZED`** ([int](language.types.integer.md))
:   Tipo de descarte não reconhecido

**`imagick::DISPOSE_UNDEFINED`** ([int](language.types.integer.md))
:   Tipo de descarte indefinido

**`imagick::DISPOSE_NONE`** ([int](language.types.integer.md))
:   Nenhum tipo de descarte definido

**`imagick::DISPOSE_BACKGROUND`** ([int](language.types.integer.md))
:   Descartar plano de fundo

**`imagick::DISPOSE_PREVIOUS`** ([int](language.types.integer.md))
:   Descartar anterior

**Constantes **`COMPOSITE_*`****

**`imagick::COMPOSITE_DEFAULT`** ([int](language.types.integer.md))
:   O operador de composição padrão

**`imagick::COMPOSITE_UNDEFINED`** ([int](language.types.integer.md))
:   Operador de composição indefinido

**`imagick::COMPOSITE_NO`** ([int](language.types.integer.md))
:   Nenhum operador de composição definido

**`imagick::COMPOSITE_ADD`** ([int](language.types.integer.md))
:   O resultado de imagem + imagem

**`imagick::COMPOSITE_ATOP`** ([int](language.types.integer.md))
:   O resultado é o mesmo formato da imagem, com a imagem composta obscurecendo a imagem onde as formas da imagem se sobrepõem

**`imagick::COMPOSITE_BLEND`** ([int](language.types.integer.md))
:   Combina a imagem

**`imagick::COMPOSITE_BUMPMAP`** ([int](language.types.integer.md))
:   O mesmo que COMPOSITE\_MULTIPLY, exceto que a origem é convertida primeiro em escala de cinza.

**`imagick::COMPOSITE_CLEAR`** ([int](language.types.integer.md))
:   Torna a imagem de destino transparente

**`imagick::COMPOSITE_COLORBURN`** ([int](language.types.integer.md))
:   Escurece a imagem de destino para refletir a imagem de origem

**`imagick::COMPOSITE_COLORDODGE`** ([int](language.types.integer.md))
:   Ilumina a imagem de destino para refletir a imagem de origem

**`imagick::COMPOSITE_COLORIZE`** ([int](language.types.integer.md))
:   Colore a imagem de destino usando a imagem composta

**`imagick::COMPOSITE_COPYBLACK`** ([int](language.types.integer.md))
:   Copia preto da origem para o destino

**`imagick::COMPOSITE_COPYBLUE`** ([int](language.types.integer.md))
:   Copia azul da origem para o destino

**`imagick::COMPOSITE_COPY`** ([int](language.types.integer.md))
:   Copia a imagem de origem na imagem de destino

**`imagick::COMPOSITE_COPYCYAN`** ([int](language.types.integer.md))
:   Copia ciano da origem para o destino

**`imagick::COMPOSITE_COPYGREEN`** ([int](language.types.integer.md))
:   Copia verde da origem ao destino

**`imagick::COMPOSITE_COPYMAGENTA`** ([int](language.types.integer.md))
:   Copia magenta da origem ao destino

**`imagick::COMPOSITE_COPYOPACITY`** ([int](language.types.integer.md))
:   Copia a opacidade da origem ao destino

**`imagick::COMPOSITE_COPYRED`** ([int](language.types.integer.md))
:   Copia o vermelho da origem ao destino

**`imagick::COMPOSITE_COPYYELLOW`** ([int](language.types.integer.md))
:   Copia amarelo da origem ao destino

**`imagick::COMPOSITE_DARKEN`** ([int](language.types.integer.md))
:   Escurece a imagem de destino

**`imagick::COMPOSITE_DSTATOP`** ([int](language.types.integer.md))
:   A parte do destino que fica dentro da origem é composta sobre a origem e substitui o destino

**`imagick::COMPOSITE_DST`** ([int](language.types.integer.md))
:   O destino permanece intocado

**`imagick::COMPOSITE_DSTIN`** ([int](language.types.integer.md))
:   As partes dentro da origem substituem o destino

**`imagick::COMPOSITE_DSTOUT`** ([int](language.types.integer.md))
:   As partes fora da origem substituem o destino

**`imagick::COMPOSITE_DSTOVER`** ([int](language.types.integer.md))
:   O destino substitui a origem

**`imagick::COMPOSITE_DIFFERENCE`** ([int](language.types.integer.md))
:   Subtrai a mais escura das duas cores constituintes da mais clara

**`imagick::COMPOSITE_DISPLACE`** ([int](language.types.integer.md))
:   Desloca os pixels da imagem de destino conforme definido pela origem

**`imagick::COMPOSITE_DISSOLVE`** ([int](language.types.integer.md))
:   Dissolve a origem no destino

**`imagick::COMPOSITE_EXCLUSION`** ([int](language.types.integer.md))
:   Produz um efeito semelhante ao de imagick::COMPOSITE\_DIFFERENCE, mas aparece com menor contraste

**`imagick::COMPOSITE_HARDLIGHT`** ([int](language.types.integer.md))
:   Multiplica ou filtra as cores, dependendo do valor da cor de origem

**`imagick::COMPOSITE_HUE`** ([int](language.types.integer.md))
:   Modifica o matiz do destino conforme definido pela origem

**`imagick::COMPOSITE_IN`** ([int](language.types.integer.md))
:   Origem dos compostos até o destino

**`imagick::COMPOSITE_LIGHTEN`** ([int](language.types.integer.md))
:   Ilumina o destino conforme definido pela origem

**`imagick::COMPOSITE_LUMINIZE`** ([int](language.types.integer.md))
:   Ilumina o destino conforme definido pela origem

**`imagick::COMPOSITE_MINUS`** ([int](language.types.integer.md))
:   Subtrai a origem do destino

**`imagick::COMPOSITE_MODULATE`** ([int](language.types.integer.md))
:   Modula o brilho, saturação e matiz do destino conforme definido pela origem

**`imagick::COMPOSITE_MULTIPLY`** ([int](language.types.integer.md))
:   Multiplica o destino pela origem

**`imagick::COMPOSITE_OUT`** ([int](language.types.integer.md))
:   Compõe partes externas da origem no destino

**`imagick::COMPOSITE_OVER`** ([int](language.types.integer.md))
:   Compõe a origem sobre o destino

**`imagick::COMPOSITE_OVERLAY`** ([int](language.types.integer.md))
:   Sobrepõe a origem no destino

**`imagick::COMPOSITE_PLUS`** ([int](language.types.integer.md))
:   Adiciona a origem ao destino

**`imagick::COMPOSITE_REPLACE`** ([int](language.types.integer.md))
:   Substitui o destino pela origem

**`imagick::COMPOSITE_SATURATE`** ([int](language.types.integer.md))
:   Satura o destino conforme definido pela origem

**`imagick::COMPOSITE_SCREEN`** ([int](language.types.integer.md))
:   A origem e o destino são complementados e depois multiplicados e depois substituem o destino

**`imagick::COMPOSITE_SOFTLIGHT`** ([int](language.types.integer.md))
:   Escurece ou clareia as cores, dependendo da origem

**`imagick::COMPOSITE_SRCATOP`** ([int](language.types.integer.md))
:   A parte da origem que fica dentro do destino é composta no destino

**`imagick::COMPOSITE_SRC`** ([int](language.types.integer.md))
:   A origem é copiada para o destino

**`imagick::COMPOSITE_SRCIN`** ([int](language.types.integer.md))
:   A parte da origem situada dentro do destino substitui o destino

**`imagick::COMPOSITE_SRCOUT`** ([int](language.types.integer.md))
:   A parte da origem fora do destino substitui o destino

**`imagick::COMPOSITE_SRCOVER`** ([int](language.types.integer.md))
:   A origem substitui o destino

**`imagick::COMPOSITE_SUBTRACT`** ([int](language.types.integer.md))
:   Subtrai as cores da imagem de origem da imagem de destino

**`imagick::COMPOSITE_THRESHOLD`** ([int](language.types.integer.md))
:   A origem é composta pelo destino conforme definido pelo limite da origem

**`imagick::COMPOSITE_XOR`** ([int](language.types.integer.md))
:   A parte da origem que fica fora do destino é combinada com a parte do destino que fica fora da origem

**Constantes **`MONTAGEMODE_*`****

**`imagick::MONTAGEMODE_FRAME`** ([int](language.types.integer.md))

**`imagick::MONTAGEMODE_UNFRAME`** ([int](language.types.integer.md))

**`imagick::MONTAGEMODE_CONCATENATE`** ([int](language.types.integer.md))

**Constantes **`STYLE_*`****

**`imagick::STYLE_NORMAL`** ([int](language.types.integer.md))

**`imagick::STYLE_ITALIC`** ([int](language.types.integer.md))

**`imagick::STYLE_OBLIQUE`** ([int](language.types.integer.md))

**`imagick::STYLE_ANY`** ([int](language.types.integer.md))

**Constantes **`FILTER_*`****

**`imagick::FILTER_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::FILTER_POINT`** ([int](language.types.integer.md))

**`imagick::FILTER_BOX`** ([int](language.types.integer.md))

**`imagick::FILTER_TRIANGLE`** ([int](language.types.integer.md))

**`imagick::FILTER_HERMITE`** ([int](language.types.integer.md))

**`imagick::FILTER_HANNING`** ([int](language.types.integer.md))

**`imagick::FILTER_HAMMING`** ([int](language.types.integer.md))

**`imagick::FILTER_BLACKMAN`** ([int](language.types.integer.md))

**`imagick::FILTER_GAUSSIAN`** ([int](language.types.integer.md))

**`imagick::FILTER_QUADRATIC`** ([int](language.types.integer.md))

**`imagick::FILTER_CUBIC`** ([int](language.types.integer.md))

**`imagick::FILTER_CATROM`** ([int](language.types.integer.md))

**`imagick::FILTER_MITCHELL`** ([int](language.types.integer.md))

**`imagick::FILTER_LANCZOS`** ([int](language.types.integer.md))

**`imagick::FILTER_BESSEL`** ([int](language.types.integer.md))

**`imagick::FILTER_SINC`** ([int](language.types.integer.md))

**Constantes **`IMGTYPE_*`****

**`imagick::IMGTYPE_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_BILEVEL`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_GRAYSCALE`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_GRAYSCALEMATTE`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_PALETTE`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_PALETTEMATTE`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_TRUECOLOR`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_TRUECOLORMATTE`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_COLORSEPARATION`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_COLORSEPARATIONMATTE`** ([int](language.types.integer.md))

**`imagick::IMGTYPE_OPTIMIZE`** ([int](language.types.integer.md))

**Constantes **`RESOLUTION_*`****

**`imagick::RESOLUTION_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::RESOLUTION_PIXELSPERINCH`** ([int](language.types.integer.md))

**`imagick::RESOLUTION_PIXELSPERCENTIMETER`** ([int](language.types.integer.md))

**Constantes **`COMPRESSION_*`****

**`imagick::COMPRESSION_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_NO`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_BZIP`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_FAX`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_GROUP4`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_JPEG`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_JPEG2000`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_LOSSLESSJPEG`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_LZW`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_RLE`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_ZIP`** ([int](language.types.integer.md))

**`imagick::COMPRESSION_DXT1`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.0 ou superior.

**`imagick::COMPRESSION_DXT3`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.0 ou superior.

**`imagick::COMPRESSION_DXT5`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.0 ou superior.

**Constantes **`PAINT_*`****

**`imagick::PAINT_POINT`** ([int](language.types.integer.md))

**`imagick::PAINT_REPLACE`** ([int](language.types.integer.md))

**`imagick::PAINT_FLOODFILL`** ([int](language.types.integer.md))

**`imagick::PAINT_FILLTOBORDER`** ([int](language.types.integer.md))

**`imagick::PAINT_RESET`** ([int](language.types.integer.md))

**Constantes **`GRAVITY_*`****

**`imagick::GRAVITY_NORTHWEST`** ([int](language.types.integer.md))

**`imagick::GRAVITY_NORTH`** ([int](language.types.integer.md))

**`imagick::GRAVITY_NORTHEAST`** ([int](language.types.integer.md))

**`imagick::GRAVITY_WEST`** ([int](language.types.integer.md))

**`imagick::GRAVITY_CENTER`** ([int](language.types.integer.md))

**`imagick::GRAVITY_EAST`** ([int](language.types.integer.md))

**`imagick::GRAVITY_SOUTHWEST`** ([int](language.types.integer.md))

**`imagick::GRAVITY_SOUTH`** ([int](language.types.integer.md))

**`imagick::GRAVITY_SOUTHEAST`** ([int](language.types.integer.md))

**Constantes **`STRETCH_*`****

**`imagick::STRETCH_NORMAL`** ([int](language.types.integer.md))

**`imagick::STRETCH_ULTRACONDENSED`** ([int](language.types.integer.md))

**`imagick::STRETCH_CONDENSED`** ([int](language.types.integer.md))

**`imagick::STRETCH_SEMICONDENSED`** ([int](language.types.integer.md))

**`imagick::STRETCH_SEMIEXPANDED`** ([int](language.types.integer.md))

**`imagick::STRETCH_EXPANDED`** ([int](language.types.integer.md))

**`imagick::STRETCH_EXTRAEXPANDED`** ([int](language.types.integer.md))

**`imagick::STRETCH_ULTRAEXPANDED`** ([int](language.types.integer.md))

**`imagick::STRETCH_ANY`** ([int](language.types.integer.md))

**Constantes **`ALIGN_*`****

**`imagick::ALIGN_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::ALIGN_LEFT`** ([int](language.types.integer.md))

**`imagick::ALIGN_CENTER`** ([int](language.types.integer.md))

**`imagick::ALIGN_RIGHT`** ([int](language.types.integer.md))

**Constantes **`DECORATION_*`****

**`imagick::DECORATION_NO`** ([int](language.types.integer.md))

**`imagick::DECORATION_UNDERLINE`** ([int](language.types.integer.md))

**`imagick::DECORATION_OVERLINE`** ([int](language.types.integer.md))

**`imagick::DECORATION_LINETROUGH`** ([int](language.types.integer.md))

**Constantes **`NOISE_*`****

**`imagick::NOISE_UNIFORM`** ([int](language.types.integer.md))

**`imagick::NOISE_GAUSSIAN`** ([int](language.types.integer.md))

**`imagick::NOISE_MULTIPLICATIVEGAUSSIAN`** ([int](language.types.integer.md))

**`imagick::NOISE_IMPULSE`** ([int](language.types.integer.md))

**`imagick::NOISE_LAPLACIAN`** ([int](language.types.integer.md))

**`imagick::NOISE_POISSON`** ([int](language.types.integer.md))

**`imagick::NOISE_RANDOM`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**Constantes **`CHANNEL_*`****

**`imagick::CHANNEL_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::CHANNEL_RED`** ([int](language.types.integer.md))

**`imagick::CHANNEL_GRAY`** ([int](language.types.integer.md))

**`imagick::CHANNEL_CYAN`** ([int](language.types.integer.md))

**`imagick::CHANNEL_GREEN`** ([int](language.types.integer.md))

**`imagick::CHANNEL_MAGENTA`** ([int](language.types.integer.md))

**`imagick::CHANNEL_BLUE`** ([int](language.types.integer.md))

**`imagick::CHANNEL_YELLOW`** ([int](language.types.integer.md))

**`imagick::CHANNEL_ALPHA`** ([int](language.types.integer.md))

**`imagick::CHANNEL_OPACITY`** ([int](language.types.integer.md))

**`imagick::CHANNEL_MATTE`** ([int](language.types.integer.md))

**`imagick::CHANNEL_BLACK`** ([int](language.types.integer.md))

**`imagick::CHANNEL_INDEX`** ([int](language.types.integer.md))

**`imagick::CHANNEL_ALL`** ([int](language.types.integer.md))

**`imagick::CHANNEL_DEFAULT`** ([int](language.types.integer.md))

**Constantes **`METRIC_*`****

**`imagick::METRIC_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::METRIC_MEANABSOLUTEERROR`** ([int](language.types.integer.md))

**`imagick::METRIC_MEANSQUAREERROR`** ([int](language.types.integer.md))

**`imagick::METRIC_PEAKABSOLUTEERROR`** ([int](language.types.integer.md))

**`imagick::METRIC_PEAKSIGNALTONOISERATIO`** ([int](language.types.integer.md))

**`imagick::METRIC_ROOTMEANSQUAREDERROR`** ([int](language.types.integer.md))

**Constantes **`PIXEL_*`****

**`imagick::PIXEL_CHAR`** ([int](language.types.integer.md))

**`imagick::PIXEL_DOUBLE`** ([int](language.types.integer.md))

**`imagick::PIXEL_FLOAT`** ([int](language.types.integer.md))

**`imagick::PIXEL_INTEGER`** ([int](language.types.integer.md))
:   Disponível somente para ImageMagick < 7.

**`imagick::PIXEL_LONG`** ([int](language.types.integer.md))

**`imagick::PIXEL_QUANTUM`** ([int](language.types.integer.md))

**`imagick::PIXEL_SHORT`** ([int](language.types.integer.md))

**Constantes **`EVALUATE_*`****

**`imagick::EVALUATE_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::EVALUATE_ADD`** ([int](language.types.integer.md))

**`imagick::EVALUATE_AND`** ([int](language.types.integer.md))

**`imagick::EVALUATE_DIVIDE`** ([int](language.types.integer.md))

**`imagick::EVALUATE_LEFTSHIFT`** ([int](language.types.integer.md))

**`imagick::EVALUATE_MAX`** ([int](language.types.integer.md))

**`imagick::EVALUATE_MIN`** ([int](language.types.integer.md))

**`imagick::EVALUATE_MULTIPLY`** ([int](language.types.integer.md))

**`imagick::EVALUATE_OR`** ([int](language.types.integer.md))

**`imagick::EVALUATE_RIGHTSHIFT`** ([int](language.types.integer.md))

**`imagick::EVALUATE_SET`** ([int](language.types.integer.md))

**`imagick::EVALUATE_SUBTRACT`** ([int](language.types.integer.md))

**`imagick::EVALUATE_XOR`** ([int](language.types.integer.md))

**`imagick::EVALUATE_POW`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_LOG`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_THRESHOLD`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_THRESHOLDBLACK`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_THRESHOLDWHITE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_GAUSSIANNOISE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_IMPULSENOISE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_LAPLACIANNOISE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_MULTIPLICATIVENOISE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_POISSONNOISE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_UNIFORMNOISE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_COSINE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_SINE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**`imagick::EVALUATE_ADDMODULUS`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.4 ou superior.

**Constantes **`COLORSPACE_*`****

**`imagick::COLORSPACE_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_RGB`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_GRAY`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_TRANSPARENT`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_OHTA`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_LAB`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_XYZ`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_YCBCR`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_YCC`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_YIQ`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_YPBPR`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_YUV`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_CMYK`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_SRGB`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_HSB`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_HSL`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_HWB`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_REC601LUMA`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_REC709LUMA`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_LOG`** ([int](language.types.integer.md))

**`imagick::COLORSPACE_CMY`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.2 ou superior.

**Constantes **`VIRTUALPIXELMETHOD_*`****

**`imagick::VIRTUALPIXELMETHOD_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::VIRTUALPIXELMETHOD_BACKGROUND`** ([int](language.types.integer.md))

**`imagick::VIRTUALPIXELMETHOD_CONSTANT`** ([int](language.types.integer.md))

**`imagick::VIRTUALPIXELMETHOD_EDGE`** ([int](language.types.integer.md))

**`imagick::VIRTUALPIXELMETHOD_MIRROR`** ([int](language.types.integer.md))

**`imagick::VIRTUALPIXELMETHOD_TILE`** ([int](language.types.integer.md))

**`imagick::VIRTUALPIXELMETHOD_TRANSPARENT`** ([int](language.types.integer.md))

**`imagick::VIRTUALPIXELMETHOD_MASK`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.2 ou superior.

**`imagick::VIRTUALPIXELMETHOD_BLACK`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.2 ou superior.

**`imagick::VIRTUALPIXELMETHOD_GRAY`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.2 ou superior.

**`imagick::VIRTUALPIXELMETHOD_WHITE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.2 ou superior.

**`imagick::VIRTUALPIXELMETHOD_HORIZONTALTILE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.3 ou superior.

**`imagick::VIRTUALPIXELMETHOD_VERTICALTILE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.3 ou superior.

**Constantes **`PREVIEW_*`****

**`imagick::PREVIEW_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::PREVIEW_ROTATE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SHEAR`** ([int](language.types.integer.md))

**`imagick::PREVIEW_ROLL`** ([int](language.types.integer.md))

**`imagick::PREVIEW_HUE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SATURATION`** ([int](language.types.integer.md))

**`imagick::PREVIEW_BRIGHTNESS`** ([int](language.types.integer.md))

**`imagick::PREVIEW_GAMMA`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SPIFF`** ([int](language.types.integer.md))

**`imagick::PREVIEW_DULL`** ([int](language.types.integer.md))

**`imagick::PREVIEW_GRAYSCALE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_QUANTIZE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_DESPECKLE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_REDUCENOISE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_ADDNOISE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SHARPEN`** ([int](language.types.integer.md))

**`imagick::PREVIEW_BLUR`** ([int](language.types.integer.md))

**`imagick::PREVIEW_THRESHOLD`** ([int](language.types.integer.md))

**`imagick::PREVIEW_EDGEDETECT`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SPREAD`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SOLARIZE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SHADE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_RAISE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SEGMENT`** ([int](language.types.integer.md))

**`imagick::PREVIEW_SWIRL`** ([int](language.types.integer.md))

**`imagick::PREVIEW_IMPLODE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_WAVE`** ([int](language.types.integer.md))

**`imagick::PREVIEW_OILPAINT`** ([int](language.types.integer.md))

**`imagick::PREVIEW_CHARCOALDRAWING`** ([int](language.types.integer.md))

**`imagick::PREVIEW_JPEG`** ([int](language.types.integer.md))

**Constantes **`RENDERINGINTENT_*`****

**`imagick::RENDERINGINTENT_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::RENDERINGINTENT_SATURATION`** ([int](language.types.integer.md))

**`imagick::RENDERINGINTENT_PERCEPTUAL`** ([int](language.types.integer.md))

**`imagick::RENDERINGINTENT_ABSOLUTE`** ([int](language.types.integer.md))

**`imagick::RENDERINGINTENT_RELATIVE`** ([int](language.types.integer.md))

**Constantes **`INTERLACE_*`****

**`imagick::INTERLACE_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::INTERLACE_NO`** ([int](language.types.integer.md))

**`imagick::INTERLACE_LINE`** ([int](language.types.integer.md))

**`imagick::INTERLACE_PLANE`** ([int](language.types.integer.md))

**`imagick::INTERLACE_PARTITION`** ([int](language.types.integer.md))

**`imagick::INTERLACE_GIF`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.4 ou superior.

**`imagick::INTERLACE_JPEG`** ([int](language.types.integer.md))

**`imagick::INTERLACE_PNG`** ([int](language.types.integer.md))

**Constantes **`FILLRULE_*`****

**`imagick::FILLRULE_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::FILLRULE_EVENODD`** ([int](language.types.integer.md))

**`imagick::FILLRULE_NONZERO`** ([int](language.types.integer.md))

**Constantes **`PATHUNITS_*`****

**`imagick::PATHUNITS_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::PATHUNITS_USERSPACE`** ([int](language.types.integer.md))

**`imagick::PATHUNITS_USERSPACEONUSE`** ([int](language.types.integer.md))

**`imagick::PATHUNITS_OBJECTBOUNDINGBOX`** ([int](language.types.integer.md))

**Constantes **`LINECAP_*`****

**`imagick::LINECAP_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::LINECAP_BUTT`** ([int](language.types.integer.md))

**`imagick::LINECAP_ROUND`** ([int](language.types.integer.md))

**`imagick::LINECAP_SQUARE`** ([int](language.types.integer.md))

**Constantes **`LINEJOIN_*`****

**`imagick::LINEJOIN_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::LINEJOIN_MITER`** ([int](language.types.integer.md))

**`imagick::LINEJOIN_ROUND`** ([int](language.types.integer.md))

**`imagick::LINEJOIN_BEVEL`** ([int](language.types.integer.md))

**Constantes **`RESOURCETYPE_*`****

**`imagick::RESOURCETYPE_UNDEFINED`** ([int](language.types.integer.md))

**`imagick::RESOURCETYPE_AREA`** ([int](language.types.integer.md))
:   Define a máxima largura \* altura de uma imagem que pode residir na memória cache de pixels.

**`imagick::RESOURCETYPE_DISK`** ([int](language.types.integer.md))
:   Define a quantidade máxima de espaço em disco em bytes permitida para uso pelo cache de pixels.

**`imagick::RESOURCETYPE_FILE`** ([int](language.types.integer.md))
:   Define o número máximo de arquivos de cache de pixels abertos.

**`imagick::RESOURCETYPE_MAP`** ([int](language.types.integer.md))
:   Define a quantidade máxima de mapa de memória em bytes a ser alocada para o cache de pixels.

**`imagick::RESOURCETYPE_MEMORY`** ([int](language.types.integer.md))
:   Define a quantidade máxima de memória em bytes a ser alocada para o cache de pixels da memória.

**`imagick::RESOURCETYPE_THREAD`** ([int](language.types.integer.md))
:   Define o máximo de threads paralelos.
    Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.7.8 ou superior.

**Constantes **`LAYERMETHOD_*`****

**`imagick::LAYERMETHOD_UNDEFINED`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

**`imagick::LAYERMETHOD_COALESCE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

**`imagick::LAYERMETHOD_COMPAREANY`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

**`imagick::LAYERMETHOD_COMPARECLEAR`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

**`imagick::LAYERMETHOD_COMPAREOVERLAY`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

**`imagick::LAYERMETHOD_DISPOSE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

**`imagick::LAYERMETHOD_OPTIMIZE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

**`imagick::LAYERMETHOD_OPTIMIZEPLUS`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

**`imagick::LAYERMETHOD_OPTIMIZEIMAGE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::LAYERMETHOD_OPTIMIZETRANS`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::LAYERMETHOD_REMOVEDUPS`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::LAYERMETHOD_REMOVEZERO`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::LAYERMETHOD_COMPOSITE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::LAYERMETHOD_MERGE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.7 ou superior.

**`imagick::LAYERMETHOD_FLATTEN`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.7 ou superior.

**`imagick::LAYERMETHOD_MOSAIC`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.7 ou superior.

**Constantes **`ORIENTATION_*`****

**`imagick::ORIENTATION_UNDEFINED`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::ORIENTATION_TOPLEFT`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::ORIENTATION_TOPRIGHT`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::ORIENTATION_BOTTOMRIGHT`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::ORIENTATION_BOTTOMLEFT`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::ORIENTATION_LEFTTOP`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::ORIENTATION_RIGHTTOP`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::ORIENTATION_RIGHTBOTTOM`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**`imagick::ORIENTATION_LEFTBOTTOM`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.0 ou superior.

**Constantes **`DISTORTION_*`****

**`imagick::DISTORTION_UNDEFINED`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**`imagick::DISTORTION_AFFINE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**`imagick::DISTORTION_AFFINEPROJECTION`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**`imagick::DISTORTION_ARC`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**`imagick::DISTORTION_BILINEAR`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**`imagick::DISTORTION_PERSPECTIVE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**`imagick::DISTORTION_PERSPECTIVEPROJECTION`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**`imagick::DISTORTION_SCALEROTATETRANSLATE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

**`imagick::DISTORTION_POLYNOMIAL`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DISTORTION_POLAR`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DISTORTION_DEPOLAR`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DISTORTION_BARREL`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DISTORTION_BARRELINVERSE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DISTORTION_SHEPARDS`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DISTORTION_SENTINEL`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**Constantes **`ALPHACHANNEL_*`****

**`imagick::ALPHACHANNEL_ACTIVATE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.8 ou superior.

**`imagick::ALPHACHANNEL_DEACTIVATE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.8 ou superior.

**`imagick::ALPHACHANNEL_RESET`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.8 ou superior.

**`imagick::ALPHACHANNEL_SET`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.8 ou superior.

**`imagick::ALPHACHANNEL_UNDEFINED`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::ALPHACHANNEL_COPY`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::ALPHACHANNEL_EXTRACT`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::ALPHACHANNEL_OPAQUE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::ALPHACHANNEL_SHAPE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::ALPHACHANNEL_TRANSPARENT`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::ALPHACHANNEL_BACKGROUND`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.5.3 ou superior.

**`imagick::ALPHACHANNEL_REMOVE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.7.8 ou superior.

**`imagick::ALPHACHANNEL_ASSOCIATE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.9.0 ou superior.

**`imagick::ALPHACHANNEL_DISSOCIATE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.9.0 ou superior.

**`imagick::ALPHACHANNEL_ON`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 7.0.0 ou superior.

**`imagick::ALPHACHANNEL_OFF`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 7.0.0 ou superior.

**`imagick::ALPHACHANNEL_DISCRETE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 7.0.0 ou superior.

**Constantes **`SPARSECOLORMETHOD_*`****

**`imagick::SPARSECOLORMETHOD_UNDEFINED`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::SPARSECOLORMETHOD_BARYCENTRIC`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::SPARSECOLORMETHOD_BILINEAR`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::SPARSECOLORMETHOD_POLYNOMIAL`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::SPARSECOLORMETHOD_SPEPARDS`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::SPARSECOLORMETHOD_VORONOI`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**Constantes **`FUNCTION_*`****

**`imagick::FUNCTION_UNDEFINED`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.9 ou superior.

**`imagick::FUNCTION_POLYNOMIAL`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.9 ou superior.

**`imagick::FUNCTION_SINUSOID`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.9 ou superior.

**Constantes **`INTERPOLATE_*`****

**`imagick::INTERPOLATE_UNDEFINED`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

**`imagick::INTERPOLATE_AVERAGE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

**`imagick::INTERPOLATE_BICUBIC`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

**`imagick::INTERPOLATE_BILINEAR`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

**`imagick::INTERPOLATE_FILTER`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

**`imagick::INTERPOLATE_INTEGER`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

**`imagick::INTERPOLATE_MESH`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

**`imagick::INTERPOLATE_NEARESTNEIGHBOR`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

**`imagick::INTERPOLATE_SPLINE`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.4 ou superior.

**Constantes **`DITHERMETHOD_*`****

**`imagick::DITHERMETHOD_UNDEFINED`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DITHERMETHOD_NO`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DITHERMETHOD_RIEMERSMA`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

**`imagick::DITHERMETHOD_FLOYDSTEINBERG`** ([int](language.types.integer.md))
:   Esta constante estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.6 ou superior.

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
