# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Constantes de tipo de cor**

**`Gmagick::COLOR_BLACK`** ([int](language.types.integer.md))
:   Preto

**`Gmagick::COLOR_BLUE`** ([int](language.types.integer.md))
:   Azul

**`Gmagick::COLOR_CYAN`** ([int](language.types.integer.md))
:   Ciano

**`Gmagick::COLOR_GREEN`** ([int](language.types.integer.md))
:   Verde

**`Gmagick::COLOR_RED`** ([int](language.types.integer.md))
:   Vermelho

**`Gmagick::COLOR_YELLOW`** ([int](language.types.integer.md))
:   Amarelo

**`Gmagick::COLOR_MAGENTA`** ([int](language.types.integer.md))
:   Magenta

**`Gmagick::COLOR_OPACITY`** ([int](language.types.integer.md))
:   Opacidade

**`Gmagick::COLOR_ALPHA`** ([int](language.types.integer.md))
:   Alfa

**`Gmagick::COLOR_FUZZ`** ([int](language.types.integer.md))
:   Fuzz

**Composite Operator Constants**

**`Gmagick::COMPOSITE_DEFAULT`** ([int](language.types.integer.md))
:   O operador composto padrão

**`Gmagick::COMPOSITE_UNDEFINED`** ([int](language.types.integer.md))
:   Operador composto indefinido

**`Gmagick::COMPOSITE_NO`** ([int](language.types.integer.md))
:   Nenhum operador composto definido

**`Gmagick::COMPOSITE_ADD`** ([int](language.types.integer.md))
:   O resultado de imagem + imagem

**`Gmagick::COMPOSITE_ATOP`** ([int](language.types.integer.md))
:   O resultado é o mesmo formato da imagem, com a imagem composta obscurecendo a imagem onde as formas da imagem se sobrepõem

**`Gmagick::COMPOSITE_BLEND`** ([int](language.types.integer.md))
:   Combina a imagem

**`Gmagick::COMPOSITE_BUMPMAP`** ([int](language.types.integer.md))
:   O mesmo que COMPOSITE\_MULTIPLY, exceto que a origem é convertida primeiro em escala de cinza.

**`Gmagick::COMPOSITE_CLEAR`** ([int](language.types.integer.md))
:   Torna a imagem de destino transparente

**`Gmagick::COMPOSITE_COLORBURN`** ([int](language.types.integer.md))
:   Escurece a imagem de destino para refletir a imagem de origem

**`Gmagick::COMPOSITE_COLORDODGE`** ([int](language.types.integer.md))
:   Ilumina a imagem de destino para refletir a imagem de origem

**`Gmagick::COMPOSITE_COLORIZE`** ([int](language.types.integer.md))
:   Colore a imagem de destino usando a imagem composta

**`Gmagick::COMPOSITE_COPYBLACK`** ([int](language.types.integer.md))
:   Copia preto da origem para o destino

**`Gmagick::COMPOSITE_COPYBLUE`** ([int](language.types.integer.md))
:   Copia azul da origem para o destino

**`Gmagick::COMPOSITE_COPY`** ([int](language.types.integer.md))
:   Copia a imagem de origem na imagem de destino

**`Gmagick::COMPOSITE_COPYCYAN`** ([int](language.types.integer.md))
:   Copia ciano da origem para o destino

**`Gmagick::COMPOSITE_COPYGREEN`** ([int](language.types.integer.md))
:   Copia verde da origem para o destino

**`Gmagick::COMPOSITE_COPYMAGENTA`** ([int](language.types.integer.md))
:   Copia magenta da origem para o destino

**`Gmagick::COMPOSITE_COPYOPACITY`** ([int](language.types.integer.md))
:   Copia opacidade da origem para o destino

**`Gmagick::COMPOSITE_COPYRED`** ([int](language.types.integer.md))
:   Copia vermelho da origem para o destino

**`Gmagick::COMPOSITE_COPYYELLOW`** ([int](language.types.integer.md))
:   Copia amarelo da origem para o destino

**`Gmagick::COMPOSITE_DARKEN`** ([int](language.types.integer.md))
:   Escurece a imagem de destino

**`Gmagick::COMPOSITE_DSTATOP`** ([int](language.types.integer.md))
:   A parte do destino que está dentro da origem é composta pela origem e substitui o destino

**`Gmagick::COMPOSITE_DST`** ([int](language.types.integer.md))
:   O destino permanece intocado

**`Gmagick::COMPOSITE_DSTIN`** ([int](language.types.integer.md))
:   As partes dentro da origem substituem o destino

**`Gmagick::COMPOSITE_DSTOUT`** ([int](language.types.integer.md))
:   As partes fora da origem substituem o destino

**`Gmagick::COMPOSITE_DSTOVER`** ([int](language.types.integer.md))
:   Destino subsitui a origem

**`Gmagick::COMPOSITE_DIFFERENCE`** ([int](language.types.integer.md))
:   Subtrai a mais escura das duas cores constituintes da mais clara

**`Gmagick::COMPOSITE_DISPLACE`** ([int](language.types.integer.md))
:   Desloca os pixels da imagem destino conforme definido pela origem

**`Gmagick::COMPOSITE_DISSOLVE`** ([int](language.types.integer.md))
:   Dissolve a origem no destino

**`Gmagick::COMPOSITE_EXCLUSION`** ([int](language.types.integer.md))
:   Produz um efeito semelhante ao de Gmagick::COMPOSITE\_DIFFERENCE, mas aparece com menor contraste

**`Gmagick::COMPOSITE_HARDLIGHT`** ([int](language.types.integer.md))
:   Multiplica ou filtra as cores, dependendo do valor da cor de origem

**`Gmagick::COMPOSITE_HUE`** ([int](language.types.integer.md))
:   Modifica o matiz do destino conforme definido pela origem

**`Gmagick::COMPOSITE_IN`** ([int](language.types.integer.md))
:   Compõe a origem no destino

**`Gmagick::COMPOSITE_LIGHTEN`** ([int](language.types.integer.md))
:   Ilumina o alvo conforme definido pela origem

**`Gmagick::COMPOSITE_LUMINIZE`** ([int](language.types.integer.md))
:   Ilumina o alvo conforme definido pela origem

**`Gmagick::COMPOSITE_MINUS`** ([int](language.types.integer.md))
:   Subtrai a origem do destino

**`Gmagick::COMPOSITE_MODULATE`** ([int](language.types.integer.md))
:   Modula o brilho, saturação e matiz alvo conforme definido pela origem

**`Gmagick::COMPOSITE_MULTIPLY`** ([int](language.types.integer.md))
:   Multiplica o destino pela origem

**`Gmagick::COMPOSITE_OUT`** ([int](language.types.integer.md))
:   Compõe partes externas da origem no destino

**`Gmagick::COMPOSITE_OVER`** ([int](language.types.integer.md))
:   Compõe a origem sobre o destino

**`Gmagick::COMPOSITE_OVERLAY`** ([int](language.types.integer.md))
:   Sobrepõe a origem no destino

**`Gmagick::COMPOSITE_PLUS`** ([int](language.types.integer.md))
:   Adiciona a origem ao destino

**`Gmagick::COMPOSITE_REPLACE`** ([int](language.types.integer.md))
:   Substitui o destino pela origem

**`Gmagick::COMPOSITE_SATURATE`** ([int](language.types.integer.md))
:   Satura o destino conforme definido pela origem

**`Gmagick::COMPOSITE_SCREEN`** ([int](language.types.integer.md))
:   A origem e o destino são complementados e depois multiplicados e depois substituem o destino

**`Gmagick::COMPOSITE_SOFTLIGHT`** ([int](language.types.integer.md))
:   Escurece ou clareia as cores, dependendo da origem

**`Gmagick::COMPOSITE_SRCATOP`** ([int](language.types.integer.md))
:   A parte da origem que fica dentro do destino é composta no destino

**`Gmagick::COMPOSITE_SRC`** ([int](language.types.integer.md))
:   A origem é copiada para o destino

**`Gmagick::COMPOSITE_SRCIN`** ([int](language.types.integer.md))
:   A parte da origem que está dentro do destino substitui o destino

**`Gmagick::COMPOSITE_SRCOUT`** ([int](language.types.integer.md))
:   A parte da origem fora do destino substitui o destino

**`Gmagick::COMPOSITE_SRCOVER`** ([int](language.types.integer.md))
:   A origem substitui o destino

**`Gmagick::COMPOSITE_SUBTRACT`** ([int](language.types.integer.md))
:   Subtrai as cores da imagem de origem da imagem de destino

**`Gmagick::COMPOSITE_THRESHOLD`** ([int](language.types.integer.md))
:   A origem é composta no destino conforme definido pelo limite de origem

**`Gmagick::COMPOSITE_XOR`** ([int](language.types.integer.md))
:   A parte da origem que fica fora do destino é combinada com a parte do destino que fica fora da origem

**Constantes do modo de montagem**

**`Gmagick::MONTAGEMODE_FRAME`** ([int](language.types.integer.md))

**`Gmagick::MONTAGEMODE_UNFRAME`** ([int](language.types.integer.md))

**`Gmagick::MONTAGEMODE_CONCATENATE`** ([int](language.types.integer.md))

**Constantes de estilo**

**`Gmagick::STYLE_NORMAL`** ([int](language.types.integer.md))

**`Gmagick::STYLE_ITALIC`** ([int](language.types.integer.md))

**`Gmagick::STYLE_OBLIQUE`** ([int](language.types.integer.md))

**`Gmagick::STYLE_ANY`** ([int](language.types.integer.md))

**Constantes de filtro**

**`Gmagick::FILTER_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::FILTER_POINT`** ([int](language.types.integer.md))

**`Gmagick::FILTER_BOX`** ([int](language.types.integer.md))

**`Gmagick::FILTER_TRIANGLE`** ([int](language.types.integer.md))

**`Gmagick::FILTER_HERMITE`** ([int](language.types.integer.md))

**`Gmagick::FILTER_HANNING`** ([int](language.types.integer.md))

**`Gmagick::FILTER_HAMMING`** ([int](language.types.integer.md))

**`Gmagick::FILTER_BLACKMAN`** ([int](language.types.integer.md))

**`Gmagick::FILTER_GAUSSIAN`** ([int](language.types.integer.md))

**`Gmagick::FILTER_QUADRATIC`** ([int](language.types.integer.md))

**`Gmagick::FILTER_CUBIC`** ([int](language.types.integer.md))

**`Gmagick::FILTER_CATROM`** ([int](language.types.integer.md))

**`Gmagick::FILTER_MITCHELL`** ([int](language.types.integer.md))

**`Gmagick::FILTER_LANCZOS`** ([int](language.types.integer.md))

**`Gmagick::FILTER_BESSEL`** ([int](language.types.integer.md))

**`Gmagick::FILTER_SINC`** ([int](language.types.integer.md))

**Constantes de tipo de imagem**

**`Gmagick::IMGTYPE_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_BILEVEL`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_GRAYSCALE`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_GRAYSCALEMATTE`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_PALETTE`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_PALETTEMATTE`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_TRUECOLOR`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_TRUECOLORMATTE`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_COLORSEPARATION`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_COLORSEPARATIONMATTE`** ([int](language.types.integer.md))

**`Gmagick::IMGTYPE_OPTIMIZE`** ([int](language.types.integer.md))

**Constantes de resolução**

**`Gmagick::RESOLUTION_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::RESOLUTION_PIXELSPERINCH`** ([int](language.types.integer.md))

**`Gmagick::RESOLUTION_PIXELSPERCENTIMETER`** ([int](language.types.integer.md))

**Constantes de compressão**

**`Gmagick::COMPRESSION_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_NO`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_BZIP`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_FAX`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_GROUP4`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_JPEG`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_JPEG2000`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_LOSSLESSJPEG`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_LZW`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_RLE`** ([int](language.types.integer.md))

**`Gmagick::COMPRESSION_ZIP`** ([int](language.types.integer.md))

**Constantes de pintura**

**`Gmagick::PAINT_POINT`** ([int](language.types.integer.md))

**`Gmagick::PAINT_REPLACE`** ([int](language.types.integer.md))

**`Gmagick::PAINT_FLOODFILL`** ([int](language.types.integer.md))

**`Gmagick::PAINT_FILLTOBORDER`** ([int](language.types.integer.md))

**`Gmagick::PAINT_RESET`** ([int](language.types.integer.md))

**Constantes de gravidade**

**`Gmagick::GRAVITY_NORTHWEST`** ([int](language.types.integer.md))

**`Gmagick::GRAVITY_NORTH`** ([int](language.types.integer.md))

**`Gmagick::GRAVITY_NORTHEAST`** ([int](language.types.integer.md))

**`Gmagick::GRAVITY_WEST`** ([int](language.types.integer.md))

**`Gmagick::GRAVITY_CENTER`** ([int](language.types.integer.md))

**`Gmagick::GRAVITY_EAST`** ([int](language.types.integer.md))

**`Gmagick::GRAVITY_SOUTHWEST`** ([int](language.types.integer.md))

**`Gmagick::GRAVITY_SOUTH`** ([int](language.types.integer.md))

**`Gmagick::GRAVITY_SOUTHEAST`** ([int](language.types.integer.md))

**Constantes de esticamento**

**`Gmagick::STRETCH_NORMAL`** ([int](language.types.integer.md))

**`Gmagick::STRETCH_ULTRACONDENSED`** ([int](language.types.integer.md))

**`Gmagick::STRETCH_CONDENSED`** ([int](language.types.integer.md))

**`Gmagick::STRETCH_SEMICONDENSED`** ([int](language.types.integer.md))

**`Gmagick::STRETCH_SEMIEXPANDED`** ([int](language.types.integer.md))

**`Gmagick::STRETCH_EXPANDED`** ([int](language.types.integer.md))

**`Gmagick::STRETCH_EXTRAEXPANDED`** ([int](language.types.integer.md))

**`Gmagick::STRETCH_ULTRAEXPANDED`** ([int](language.types.integer.md))

**`Gmagick::STRETCH_ANY`** ([int](language.types.integer.md))

**Constantes de alinhamento**

**`Gmagick::ALIGN_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::ALIGN_LEFT`** ([int](language.types.integer.md))

**`Gmagick::ALIGN_CENTER`** ([int](language.types.integer.md))

**`Gmagick::ALIGN_RIGHT`** ([int](language.types.integer.md))

**Constantes de decoração**

**`Gmagick::DECORATION_NO`** ([int](language.types.integer.md))

**`Gmagick::DECORATION_UNDERLINE`** ([int](language.types.integer.md))

**`Gmagick::DECORATION_OVERLINE`** ([int](language.types.integer.md))

**`Gmagick::DECORATION_LINETROUGH`** ([int](language.types.integer.md))

**Constantes de ruído**

**`Gmagick::NOISE_UNIFORM`** ([int](language.types.integer.md))

**`Gmagick::NOISE_GAUSSIAN`** ([int](language.types.integer.md))

**`Gmagick::NOISE_MULTIPLICATIVEGAUSSIAN`** ([int](language.types.integer.md))

**`Gmagick::NOISE_IMPULSE`** ([int](language.types.integer.md))

**`Gmagick::NOISE_LAPLACIAN`** ([int](language.types.integer.md))

**`Gmagick::NOISE_POISSON`** ([int](language.types.integer.md))

**Constantes de canal**

**`Gmagick::CHANNEL_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_RED`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_GRAY`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_CYAN`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_GREEN`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_MAGENTA`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_BLUE`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_YELLOW`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_ALPHA`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_OPACITY`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_MATTE`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_BLACK`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_INDEX`** ([int](language.types.integer.md))

**`Gmagick::CHANNEL_ALL`** ([int](language.types.integer.md))

**Constantes métricas**

**`Gmagick::METRIC_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::METRIC_MEANABSOLUTEERROR`** ([int](language.types.integer.md))

**`Gmagick::METRIC_MEANSQUAREERROR`** ([int](language.types.integer.md))

**`Gmagick::METRIC_PEAKABSOLUTEERROR`** ([int](language.types.integer.md))

**`Gmagick::METRIC_PEAKSIGNALTONOISERATIO`** ([int](language.types.integer.md))

**`Gmagick::METRIC_ROOTMEANSQUAREDERROR`** ([int](language.types.integer.md))

**Constantes de pixels**

**`Gmagick::PIXEL_CHAR`** ([int](language.types.integer.md))

**`Gmagick::PIXEL_DOUBLE`** ([int](language.types.integer.md))

**`Gmagick::PIXEL_FLOAT`** ([int](language.types.integer.md))

**`Gmagick::PIXEL_INTEGER`** ([int](language.types.integer.md))

**`Gmagick::PIXEL_LONG`** ([int](language.types.integer.md))

**`Gmagick::PIXEL_QUANTUM`** ([int](language.types.integer.md))

**`Gmagick::PIXEL_SHORT`** ([int](language.types.integer.md))

**Constantes de espaço de cores**

**`Gmagick::COLORSPACE_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_RGB`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_GRAY`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_TRANSPARENT`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_OHTA`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_LAB`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_XYZ`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_YCBCR`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_YCC`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_YIQ`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_YPBPR`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_YUV`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_CMYK`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_SRGB`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_HSB`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_HSL`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_HWB`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_REC601LUMA`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_REC709LUMA`** ([int](language.types.integer.md))

**`Gmagick::COLORSPACE_LOG`** ([int](language.types.integer.md))

**Constantes de Método de Pixel Virtual**

**`Gmagick::VIRTUALPIXELMETHOD_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::VIRTUALPIXELMETHOD_BACKGROUND`** ([int](language.types.integer.md))

**`Gmagick::VIRTUALPIXELMETHOD_CONSTANT`** ([int](language.types.integer.md))

**`Gmagick::VIRTUALPIXELMETHOD_EDGE`** ([int](language.types.integer.md))

**`Gmagick::VIRTUALPIXELMETHOD_MIRROR`** ([int](language.types.integer.md))

**`Gmagick::VIRTUALPIXELMETHOD_TILE`** ([int](language.types.integer.md))

**`Gmagick::VIRTUALPIXELMETHOD_TRANSPARENT`** ([int](language.types.integer.md))

**Constantes de pré-visualização**

**`Gmagick::PREVIEW_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_ROTATE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SHEAR`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_ROLL`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_HUE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SATURATION`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_BRIGHTNESS`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_GAMMA`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SPIFF`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_DULL`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_GRAYSCALE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_QUANTIZE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_DESPECKLE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_REDUCENOISE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_ADDNOISE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SHARPEN`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_BLUR`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_THRESHOLD`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_EDGEDETECT`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SPREAD`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SOLARIZE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SHADE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_RAISE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SEGMENT`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_SWIRL`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_IMPLODE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_WAVE`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_OILPAINT`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_CHARCOALDRAWING`** ([int](language.types.integer.md))

**`Gmagick::PREVIEW_JPEG`** ([int](language.types.integer.md))

**Constantes de intenção de renderização**

**`Gmagick::RENDERINGINTENT_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::RENDERINGINTENT_SATURATION`** ([int](language.types.integer.md))

**`Gmagick::RENDERINGINTENT_PERCEPTUAL`** ([int](language.types.integer.md))

**`Gmagick::RENDERINGINTENT_ABSOLUTE`** ([int](language.types.integer.md))

**`Gmagick::RENDERINGINTENT_RELATIVE`** ([int](language.types.integer.md))

**Constantes de regra de preenchimento**

**`Gmagick::FILLRULE_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::FILLRULE_EVENODD`** ([int](language.types.integer.md))

**`Gmagick::FILLRULE_NONZERO`** ([int](language.types.integer.md))

**Constantes de unidade de caminho**

**`Gmagick::PATHUNITS_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::PATHUNITS_USERSPACE`** ([int](language.types.integer.md))

**`Gmagick::PATHUNITS_USERSPACEONUSE`** ([int](language.types.integer.md))

**`Gmagick::PATHUNITS_OBJECTBOUNDINGBOX`** ([int](language.types.integer.md))

**Constantes extremidade de linha**

**`Gmagick::LINECAP_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::LINECAP_BUTT`** ([int](language.types.integer.md))

**`Gmagick::LINECAP_ROUND`** ([int](language.types.integer.md))

**`Gmagick::LINECAP_SQUARE`** ([int](language.types.integer.md))

**Constantes de junção de linhas**

**`Gmagick::LINEJOIN_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::LINEJOIN_MITER`** ([int](language.types.integer.md))

**`Gmagick::LINEJOIN_ROUND`** ([int](language.types.integer.md))

**`Gmagick::LINEJOIN_BEVEL`** ([int](language.types.integer.md))

**Constantes de tipo de recurso**

**`Gmagick::RESOURCETYPE_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::RESOURCETYPE_AREA`** ([int](language.types.integer.md))

**`Gmagick::RESOURCETYPE_DISK`** ([int](language.types.integer.md))

**`Gmagick::RESOURCETYPE_FILE`** ([int](language.types.integer.md))

**`Gmagick::RESOURCETYPE_MAP`** ([int](language.types.integer.md))

**`Gmagick::RESOURCETYPE_MEMORY`** ([int](language.types.integer.md))

**Constantes de orientação**

**`Gmagick::ORIENTATION_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::ORIENTATION_TOPLEFT`** ([int](language.types.integer.md))

**`Gmagick::ORIENTATION_TOPRIGHT`** ([int](language.types.integer.md))

**`Gmagick::ORIENTATION_BOTTOMRIGHT`** ([int](language.types.integer.md))

**`Gmagick::ORIENTATION_BOTTOMLEFT`** ([int](language.types.integer.md))

**`Gmagick::ORIENTATION_LEFTTOP`** ([int](language.types.integer.md))

**`Gmagick::ORIENTATION_RIGHTTOP`** ([int](language.types.integer.md))

**`Gmagick::ORIENTATION_RIGHTBOTTOM`** ([int](language.types.integer.md))

**`Gmagick::ORIENTATION_LEFTBOTTOM`** ([int](language.types.integer.md))

**Constantes de entrelaçamento**

**`Gmagick::INTERLACE_UNDEFINED`** ([int](language.types.integer.md))

**`Gmagick::INTERLACE_NO`** ([int](language.types.integer.md))

**`Gmagick::INTERLACE_NONE`** ([int](language.types.integer.md))

**`Gmagick::INTERLACE_LINE`** ([int](language.types.integer.md))

**`Gmagick::INTERLACE_PLANE`** ([int](language.types.integer.md))

**`Gmagick::INTERLACE_PARTITION`** ([int](language.types.integer.md))

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
