# A classe ImagickDraw

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.imagickdraw.php

---

# A classe [ImagickDraw](class.imagickdraw.md)

(PECL imagick 2, PECL imagick 3)

## Resumo da classe

class **ImagickDraw**
{

public function [affine](imagickdraw.affine.md)([array](language.types.array.md) `$affine`): [bool](language.types.boolean.md)

public function [annotation](imagickdraw.annotation.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`, [string](language.types.string.md) `$text`): [bool](language.types.boolean.md)

public function [arc](imagickdraw.arc.md)(  
    [float](language.types.float.md) `$start_x`,  
    [float](language.types.float.md) `$start_y`,  
    [float](language.types.float.md) `$end_x`,  
    [float](language.types.float.md) `$end_y`,  
    [float](language.types.float.md) `$start_angle`,  
    [float](language.types.float.md) `$end_angle`  
): [bool](language.types.boolean.md)

public function [bezier](imagickdraw.bezier.md)([array](language.types.array.md) `$coordinates`): [bool](language.types.boolean.md)

public function [circle](imagickdraw.circle.md)(  
    [float](language.types.float.md) `$origin_x`,  
    [float](language.types.float.md) `$origin_y`,  
    [float](language.types.float.md) `$perimeter_x`,  
    [float](language.types.float.md) `$perimeter_y`  
): [bool](language.types.boolean.md)

public function [clear](imagickdraw.clear.md)(): [bool](language.types.boolean.md)

public function [clone](imagickdraw.clone.md)(): [ImagickDraw](class.imagickdraw.md)

public function [color](imagickdraw.color.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`, [int](language.types.integer.md) `$paint`): [bool](language.types.boolean.md)

public function [comment](imagickdraw.comment.md)([string](language.types.string.md) `$comment`): [bool](language.types.boolean.md)

public function [composite](imagickdraw.composite.md)(  
    [int](language.types.integer.md) `$composite`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$width`,  
    [float](language.types.float.md) `$height`,  
    [Imagick](class.imagick.md) `$image`  
): [bool](language.types.boolean.md)

public function [destroy](imagickdraw.destroy.md)(): [bool](language.types.boolean.md)

public function [ellipse](imagickdraw.ellipse.md)(  
    [float](language.types.float.md) `$origin_x`,  
    [float](language.types.float.md) `$origin_y`,  
    [float](language.types.float.md) `$radius_x`,  
    [float](language.types.float.md) `$radius_y`,  
    [float](language.types.float.md) `$angle_start`,  
    [float](language.types.float.md) `$angle_end`  
): [bool](language.types.boolean.md)

public function [getClipPath](imagickdraw.getclippath.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

public function [getClipRule](imagickdraw.getcliprule.md)(): [int](language.types.integer.md)

public function [getClipUnits](imagickdraw.getclipunits.md)(): [int](language.types.integer.md)

public function [getFillColor](imagickdraw.getfillcolor.md)(): [ImagickPixel](class.imagickpixel.md)

public function [getFillOpacity](imagickdraw.getfillopacity.md)(): [float](language.types.float.md)

public function [getFillRule](imagickdraw.getfillrule.md)(): [int](language.types.integer.md)

public function [getFont](imagickdraw.getfont.md)(): [string](language.types.string.md)

public function [getFontFamily](imagickdraw.getfontfamily.md)(): [string](language.types.string.md)

public function [getFontSize](imagickdraw.getfontsize.md)(): [float](language.types.float.md)

public function [getFontStretch](imagickdraw.getfontstretch.md)(): [int](language.types.integer.md)

public function [getFontStyle](imagickdraw.getfontstyle.md)(): [int](language.types.integer.md)

public function [getFontWeight](imagickdraw.getfontweight.md)(): [int](language.types.integer.md)

public function [getGravity](imagickdraw.getgravity.md)(): [int](language.types.integer.md)

public function [getStrokeAntialias](imagickdraw.getstrokeantialias.md)(): [bool](language.types.boolean.md)

public function [getStrokeColor](imagickdraw.getstrokecolor.md)(): [ImagickPixel](class.imagickpixel.md)

public function [getStrokeDashArray](imagickdraw.getstrokedasharray.md)(): [array](language.types.array.md)

public function [getStrokeDashOffset](imagickdraw.getstrokedashoffset.md)(): [float](language.types.float.md)

public function [getStrokeLineCap](imagickdraw.getstrokelinecap.md)(): [int](language.types.integer.md)

public function [getStrokeLineJoin](imagickdraw.getstrokelinejoin.md)(): [int](language.types.integer.md)

public function [getStrokeMiterLimit](imagickdraw.getstrokemiterlimit.md)(): [int](language.types.integer.md)

public function [getStrokeOpacity](imagickdraw.getstrokeopacity.md)(): [float](language.types.float.md)

public function [getStrokeWidth](imagickdraw.getstrokewidth.md)(): [float](language.types.float.md)

public function [getTextAlignment](imagickdraw.gettextalignment.md)(): [int](language.types.integer.md)

public function [getTextAntialias](imagickdraw.gettextantialias.md)(): [bool](language.types.boolean.md)

public function [getTextDecoration](imagickdraw.gettextdecoration.md)(): [int](language.types.integer.md)

public function [getTextEncoding](imagickdraw.gettextencoding.md)(): [false](language.types.singleton.md)|[string](language.types.string.md)

public function [getTextInterlineSpacing](imagickdraw.gettextinterlinespacing.md)(): [float](language.types.float.md)

public function [getTextInterwordSpacing](imagickdraw.gettextinterwordspacing.md)(): [float](language.types.float.md)

public function [getTextKerning](imagickdraw.gettextkerning.md)(): [float](language.types.float.md)

public function [getTextUnderColor](imagickdraw.gettextundercolor.md)(): [ImagickPixel](class.imagickpixel.md)

public function [getVectorGraphics](imagickdraw.getvectorgraphics.md)(): [string](language.types.string.md)

public function [line](imagickdraw.line.md)(  
    [float](language.types.float.md) `$start_x`,  
    [float](language.types.float.md) `$start_y`,  
    [float](language.types.float.md) `$end_x`,  
    [float](language.types.float.md) `$end_y`  
): [bool](language.types.boolean.md)

public function [matte](imagickdraw.matte.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`, [int](language.types.integer.md) `$paint`): [bool](language.types.boolean.md)

public function [pathClose](imagickdraw.pathclose.md)(): [bool](language.types.boolean.md)

public function [pathCurveToAbsolute](imagickdraw.pathcurvetoabsolute.md)(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

public function [pathCurveToQuadraticBezierAbsolute](imagickdraw.pathcurvetoquadraticbezierabsolute.md)(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x_end`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

public function [pathCurveToQuadraticBezierRelative](imagickdraw.pathcurvetoquadraticbezierrelative.md)(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x_end`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

public function [pathCurveToQuadraticBezierSmoothAbsolute](imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [pathCurveToQuadraticBezierSmoothRelative](imagickdraw.pathcurvetoquadraticbeziersmoothrelative.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [pathCurveToRelative](imagickdraw.pathcurvetorelative.md)(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

public function [pathCurveToSmoothAbsolute](imagickdraw.pathcurvetosmoothabsolute.md)(  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

public function [pathCurveToSmoothRelative](imagickdraw.pathcurvetosmoothrelative.md)(  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

public function [pathEllipticArcAbsolute](imagickdraw.pathellipticarcabsolute.md)(  
    [float](language.types.float.md) `$rx`,  
    [float](language.types.float.md) `$ry`,  
    [float](language.types.float.md) `$x_axis_rotation`,  
    [bool](language.types.boolean.md) `$large_arc`,  
    [bool](language.types.boolean.md) `$sweep`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

public function [pathEllipticArcRelative](imagickdraw.pathellipticarcrelative.md)(  
    [float](language.types.float.md) `$rx`,  
    [float](language.types.float.md) `$ry`,  
    [float](language.types.float.md) `$x_axis_rotation`,  
    [bool](language.types.boolean.md) `$large_arc`,  
    [bool](language.types.boolean.md) `$sweep`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

public function [pathFinish](imagickdraw.pathfinish.md)(): [bool](language.types.boolean.md)

public function [pathLineToAbsolute](imagickdraw.pathlinetoabsolute.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [pathLineToHorizontalAbsolute](imagickdraw.pathlinetohorizontalabsolute.md)([float](language.types.float.md) `$x`): [bool](language.types.boolean.md)

public function [pathLineToHorizontalRelative](imagickdraw.pathlinetohorizontalrelative.md)([float](language.types.float.md) `$x`): [bool](language.types.boolean.md)

public function [pathLineToRelative](imagickdraw.pathlinetorelative.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [pathLineToVerticalAbsolute](imagickdraw.pathlinetoverticalabsolute.md)([float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [pathLineToVerticalRelative](imagickdraw.pathlinetoverticalrelative.md)([float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [pathMoveToAbsolute](imagickdraw.pathmovetoabsolute.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [pathMoveToRelative](imagickdraw.pathmovetorelative.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [pathStart](imagickdraw.pathstart.md)(): [bool](language.types.boolean.md)

public function [point](imagickdraw.point.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [polygon](imagickdraw.polygon.md)([array](language.types.array.md) `$coordinates`): [bool](language.types.boolean.md)

public function [polyline](imagickdraw.polyline.md)([array](language.types.array.md) `$coordinates`): [bool](language.types.boolean.md)

public function [pop](imagickdraw.pop.md)(): [bool](language.types.boolean.md)

public function [popClipPath](imagickdraw.popclippath.md)(): [bool](language.types.boolean.md)

public function [popDefs](imagickdraw.popdefs.md)(): [bool](language.types.boolean.md)

public function [popPattern](imagickdraw.poppattern.md)(): [bool](language.types.boolean.md)

public function [push](imagickdraw.push.md)(): [bool](language.types.boolean.md)

public function [pushClipPath](imagickdraw.pushclippath.md)([string](language.types.string.md) `$clip_mask_id`): [bool](language.types.boolean.md)

public function [pushDefs](imagickdraw.pushdefs.md)(): [bool](language.types.boolean.md)

public function [pushPattern](imagickdraw.pushpattern.md)(  
    [string](language.types.string.md) `$pattern_id`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$width`,  
    [float](language.types.float.md) `$height`  
): [bool](language.types.boolean.md)

public function [rectangle](imagickdraw.rectangle.md)(  
    [float](language.types.float.md) `$top_left_x`,  
    [float](language.types.float.md) `$top_left_y`,  
    [float](language.types.float.md) `$bottom_right_x`,  
    [float](language.types.float.md) `$bottom_right_y`  
): [bool](language.types.boolean.md)

public function [render](imagickdraw.render.md)(): [bool](language.types.boolean.md)

public function [resetVectorGraphics](imagickdraw.resetvectorgraphics.md)(): [bool](language.types.boolean.md)

public function [rotate](imagickdraw.rotate.md)([float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

public function [roundRectangle](imagickdraw.roundrectangle.md)(  
    [float](language.types.float.md) `$top_left_x`,  
    [float](language.types.float.md) `$top_left_y`,  
    [float](language.types.float.md) `$bottom_right_x`,  
    [float](language.types.float.md) `$bottom_right_y`,  
    [float](language.types.float.md) `$rounding_x`,  
    [float](language.types.float.md) `$rounding_y`  
): [bool](language.types.boolean.md)

public function [scale](imagickdraw.scale.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

public function [setClipPath](imagickdraw.setclippath.md)([string](language.types.string.md) `$clip_mask`): [bool](language.types.boolean.md)

public function [setClipRule](imagickdraw.setcliprule.md)([int](language.types.integer.md) `$fillrule`): [bool](language.types.boolean.md)

public function [setClipUnits](imagickdraw.setclipunits.md)([int](language.types.integer.md) `$pathunits`): [bool](language.types.boolean.md)

public function [setFillAlpha](imagickdraw.setfillalpha.md)([float](language.types.float.md) `$alpha`): [bool](language.types.boolean.md)

public function [setFillColor](imagickdraw.setfillcolor.md)([ImagickPixel](class.imagickpixel.md)|[string](language.types.string.md) `$fill_color`): [bool](language.types.boolean.md)

public function [setFillOpacity](imagickdraw.setfillopacity.md)([float](language.types.float.md) `$opacity`): [bool](language.types.boolean.md)

public function [setFillPatternURL](imagickdraw.setfillpatternurl.md)([string](language.types.string.md) `$fill_url`): [bool](language.types.boolean.md)

public function [setFillRule](imagickdraw.setfillrule.md)([int](language.types.integer.md) `$fillrule`): [bool](language.types.boolean.md)

public function [setFont](imagickdraw.setfont.md)([string](language.types.string.md) `$font_name`): [bool](language.types.boolean.md)

public function [setFontFamily](imagickdraw.setfontfamily.md)([string](language.types.string.md) `$font_family`): [bool](language.types.boolean.md)

public function [setFontSize](imagickdraw.setfontsize.md)([float](language.types.float.md) `$point_size`): [bool](language.types.boolean.md)

public function [setFontStretch](imagickdraw.setfontstretch.md)([int](language.types.integer.md) `$stretch`): [bool](language.types.boolean.md)

public function [setFontStyle](imagickdraw.setfontstyle.md)([int](language.types.integer.md) `$style`): [bool](language.types.boolean.md)

public function [setFontWeight](imagickdraw.setfontweight.md)([int](language.types.integer.md) `$weight`): [bool](language.types.boolean.md)

public function [setGravity](imagickdraw.setgravity.md)([int](language.types.integer.md) `$gravity`): [bool](language.types.boolean.md)

public function [setResolution](imagickdraw.setresolution.md)([float](language.types.float.md) `$resolution_x`, [float](language.types.float.md) `$resolution_y`): [bool](language.types.boolean.md)

public function [setStrokeAlpha](imagickdraw.setstrokealpha.md)([float](language.types.float.md) `$alpha`): [bool](language.types.boolean.md)

public function [setStrokeAntialias](imagickdraw.setstrokeantialias.md)([bool](language.types.boolean.md) `$enabled`): [bool](language.types.boolean.md)

public function [setStrokeColor](imagickdraw.setstrokecolor.md)([ImagickPixel](class.imagickpixel.md)|[string](language.types.string.md) `$color`): [bool](language.types.boolean.md)

public function [setStrokeDashArray](imagickdraw.setstrokedasharray.md)([?](language.types.null.md)[array](language.types.array.md) `$dashes`): [bool](language.types.boolean.md)

public function [setStrokeDashOffset](imagickdraw.setstrokedashoffset.md)([float](language.types.float.md) `$dash_offset`): [bool](language.types.boolean.md)

public function [setStrokeLineCap](imagickdraw.setstrokelinecap.md)([int](language.types.integer.md) `$linecap`): [bool](language.types.boolean.md)

public function [setStrokeLineJoin](imagickdraw.setstrokelinejoin.md)([int](language.types.integer.md) `$linejoin`): [bool](language.types.boolean.md)

public function [setStrokeMiterLimit](imagickdraw.setstrokemiterlimit.md)([int](language.types.integer.md) `$miterlimit`): [bool](language.types.boolean.md)

public function [setStrokeOpacity](imagickdraw.setstrokeopacity.md)([float](language.types.float.md) `$opacity`): [bool](language.types.boolean.md)

public function [setStrokePatternURL](imagickdraw.setstrokepatternurl.md)([string](language.types.string.md) `$stroke_url`): [bool](language.types.boolean.md)

public function [setStrokeWidth](imagickdraw.setstrokewidth.md)([float](language.types.float.md) `$width`): [bool](language.types.boolean.md)

public function [setTextAlignment](imagickdraw.settextalignment.md)([int](language.types.integer.md) `$align`): [bool](language.types.boolean.md)

public function [setTextAntialias](imagickdraw.settextantialias.md)([bool](language.types.boolean.md) `$antialias`): [bool](language.types.boolean.md)

public function [setTextDecoration](imagickdraw.settextdecoration.md)([int](language.types.integer.md) `$decoration`): [bool](language.types.boolean.md)

public function [setTextEncoding](imagickdraw.settextencoding.md)([string](language.types.string.md) `$encoding`): [bool](language.types.boolean.md)

public function [setTextInterlineSpacing](imagickdraw.settextinterlinespacing.md)([float](language.types.float.md) `$spacing`): [bool](language.types.boolean.md)

public function [setTextInterwordSpacing](imagickdraw.settextinterwordspacing.md)([float](language.types.float.md) `$spacing`): [bool](language.types.boolean.md)

public function [setTextKerning](imagickdraw.settextkerning.md)([float](language.types.float.md) `$kerning`): [bool](language.types.boolean.md)

public function [setTextUnderColor](imagickdraw.settextundercolor.md)([ImagickPixel](class.imagickpixel.md)|[string](language.types.string.md) `$under_color`): [bool](language.types.boolean.md)

public function [setVectorGraphics](imagickdraw.setvectorgraphics.md)([string](language.types.string.md) `$xml`): [bool](language.types.boolean.md)

public function [setViewbox](imagickdraw.setviewbox.md)(  
    [int](language.types.integer.md) `$left_x`,  
    [int](language.types.integer.md) `$top_y`,  
    [int](language.types.integer.md) `$right_x`,  
    [int](language.types.integer.md) `$bottom_y`  
): [bool](language.types.boolean.md)

public function [skewX](imagickdraw.skewx.md)([float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

public function [skewY](imagickdraw.skewy.md)([float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

public function [translate](imagickdraw.translate.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

}

## Índice

- [ImagickDraw::affine](imagickdraw.affine.md) — Ajusta a matriz de transformação afim atual
- [ImagickDraw::annotation](imagickdraw.annotation.md) — Desenha texto na imagem
- [ImagickDraw::arc](imagickdraw.arc.md) — Desenha um arco
- [ImagickDraw::bezier](imagickdraw.bezier.md) — Desenha uma curva de Bézier
- [ImagickDraw::circle](imagickdraw.circle.md) — Desenha um círculo
- [ImagickDraw::clear](imagickdraw.clear.md) — Limpa o ImagickDraw
- [ImagickDraw::clone](imagickdraw.clone.md) — Faz uma cópia exata do objeto ImagickDraw especificado
- [ImagickDraw::color](imagickdraw.color.md) — Desenha cores na imagem
- [ImagickDraw::comment](imagickdraw.comment.md) — Adiciona um comentário
- [ImagickDraw::composite](imagickdraw.composite.md) — Compõe uma imagem sobre a imagem atual
- [ImagickDraw::\_\_construct](imagickdraw.construct.md) — O construtor ImagickDraw
- [ImagickDraw::destroy](imagickdraw.destroy.md) — Libera todos os recursos associados
- [ImagickDraw::ellipse](imagickdraw.ellipse.md) — Desenha uma elipse na imagem
- [ImagickDraw::getClipPath](imagickdraw.getclippath.md) — Obtém o ID do caminho de recorte atual
- [ImagickDraw::getClipRule](imagickdraw.getcliprule.md) — Retorna a regra atual de preenchimento do polígono
- [ImagickDraw::getClipUnits](imagickdraw.getclipunits.md) — Retorna a interpretação das unidades de caminho de recorte
- [ImagickDraw::getFillColor](imagickdraw.getfillcolor.md) — Retorna a cor de preenchimento
- [ImagickDraw::getFillOpacity](imagickdraw.getfillopacity.md) — Retorna a opacidade usada ao desenhar
- [ImagickDraw::getFillRule](imagickdraw.getfillrule.md) — Retorna a regra de preenchimento
- [ImagickDraw::getFont](imagickdraw.getfont.md) — Retorna a fonte
- [ImagickDraw::getFontFamily](imagickdraw.getfontfamily.md) — Retorna a família de fontes
- [ImagickDraw::getFontSize](imagickdraw.getfontsize.md) — Retorna o tamanho da fonte em pontos
- [ImagickDraw::getFontStretch](imagickdraw.getfontstretch.md) — Obtém o esticamento de fonte a ser usado ao fazer anotações com texto
- [ImagickDraw::getFontStyle](imagickdraw.getfontstyle.md) — Retorna o estilo da fonte
- [ImagickDraw::getFontWeight](imagickdraw.getfontweight.md) — Retorna a espessura da fonte
- [ImagickDraw::getGravity](imagickdraw.getgravity.md) — Retorna o alinhamento de posicionamento do texto
- [ImagickDraw::getStrokeAntialias](imagickdraw.getstrokeantialias.md) — Retorna a configuração atual de suavização do traço
- [ImagickDraw::getStrokeColor](imagickdraw.getstrokecolor.md) — Retorna a cor usada para traçar os contornos dos objetos
- [ImagickDraw::getStrokeDashArray](imagickdraw.getstrokedasharray.md) — Retorna um array que representa o padrão de traços e espaços usados ​​para traçar caminhos
- [ImagickDraw::getStrokeDashOffset](imagickdraw.getstrokedashoffset.md) — Retorna o deslocamento no padrão de traço para iniciar o traço
- [ImagickDraw::getStrokeLineCap](imagickdraw.getstrokelinecap.md) — Retorna a forma a ser usada no final dos subcaminhos abertos quando eles são traçados
- [ImagickDraw::getStrokeLineJoin](imagickdraw.getstrokelinejoin.md) — Retorna a forma a ser usada nos cantos dos caminhos quando eles são traçados
- [ImagickDraw::getStrokeMiterLimit](imagickdraw.getstrokemiterlimit.md) — Retorna o limite de esquadria do traçado
- [ImagickDraw::getStrokeOpacity](imagickdraw.getstrokeopacity.md) — Retorna a opacidade dos contornos dos objetos traçados
- [ImagickDraw::getStrokeWidth](imagickdraw.getstrokewidth.md) — Retorna a largura do traço usado para desenhar contornos de objetos
- [ImagickDraw::getTextAlignment](imagickdraw.gettextalignment.md) — Retorna o alinhamento do texto
- [ImagickDraw::getTextAntialias](imagickdraw.gettextantialias.md) — Retorna a configuração atual de antialias do texto
- [ImagickDraw::getTextDecoration](imagickdraw.gettextdecoration.md) — Retorna a decoração do texto
- [ImagickDraw::getTextEncoding](imagickdraw.gettextencoding.md) — Retorna o conjunto de caracteres usado para anotações de texto
- [ImagickDraw::getTextInterlineSpacing](imagickdraw.gettextinterlinespacing.md) — Obtém o espaçamento entre linhas do texto
- [ImagickDraw::getTextInterwordSpacing](imagickdraw.gettextinterwordspacing.md) — Obtém o espaçamento entre palavras do texto
- [ImagickDraw::getTextKerning](imagickdraw.gettextkerning.md) — Obtém o espaçamento entre letras do texto
- [ImagickDraw::getTextUnderColor](imagickdraw.gettextundercolor.md) — Retorna a cor sob o texto
- [ImagickDraw::getVectorGraphics](imagickdraw.getvectorgraphics.md) — Retorna uma string contendo gráficos vetoriais
- [ImagickDraw::line](imagickdraw.line.md) — Desenha uma linha
- [ImagickDraw::matte](imagickdraw.matte.md) — Pinta no canal de opacidade da imagem
- [ImagickDraw::pathClose](imagickdraw.pathclose.md) — Adiciona um elemento de caminho ao caminho atual
- [ImagickDraw::pathCurveToAbsolute](imagickdraw.pathcurvetoabsolute.md) — Desenha uma curva cúbica de Bézier
- [ImagickDraw::pathCurveToQuadraticBezierAbsolute](imagickdraw.pathcurvetoquadraticbezierabsolute.md) — Desenha uma curva quadrática de Bézier
- [ImagickDraw::pathCurveToQuadraticBezierRelative](imagickdraw.pathcurvetoquadraticbezierrelative.md) — Desenha uma curva quadrática de Bézier
- [ImagickDraw::pathCurveToQuadraticBezierSmoothAbsolute](imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.md) — Desenha uma curva quadrática de Bézier
- [ImagickDraw::pathCurveToQuadraticBezierSmoothRelative](imagickdraw.pathcurvetoquadraticbeziersmoothrelative.md) — Desenha uma curva quadrática de Bézier
- [ImagickDraw::pathCurveToRelative](imagickdraw.pathcurvetorelative.md) — Desenha uma curva cúbica de Bézier
- [ImagickDraw::pathCurveToSmoothAbsolute](imagickdraw.pathcurvetosmoothabsolute.md) — Desenha uma curva cúbica de Bézier
- [ImagickDraw::pathCurveToSmoothRelative](imagickdraw.pathcurvetosmoothrelative.md) — Desenha uma curva cúbica de Bézier
- [ImagickDraw::pathEllipticArcAbsolute](imagickdraw.pathellipticarcabsolute.md) — Desenha um arco elíptico
- [ImagickDraw::pathEllipticArcRelative](imagickdraw.pathellipticarcrelative.md) — Desenha um arco elíptico
- [ImagickDraw::pathFinish](imagickdraw.pathfinish.md) — Termina o caminho atual
- [ImagickDraw::pathLineToAbsolute](imagickdraw.pathlinetoabsolute.md) — Desenha um caminho de linha
- [ImagickDraw::pathLineToHorizontalAbsolute](imagickdraw.pathlinetohorizontalabsolute.md) — Desenha um caminho de linha horizontal
- [ImagickDraw::pathLineToHorizontalRelative](imagickdraw.pathlinetohorizontalrelative.md) — Desenha um caminho de linha horizontal
- [ImagickDraw::pathLineToRelative](imagickdraw.pathlinetorelative.md) — Desenha um caminho de linha
- [ImagickDraw::pathLineToVerticalAbsolute](imagickdraw.pathlinetoverticalabsolute.md) — Desenha um caminho de linha vertical
- [ImagickDraw::pathLineToVerticalRelative](imagickdraw.pathlinetoverticalrelative.md) — Desenha um caminho de linha vertical
- [ImagickDraw::pathMoveToAbsolute](imagickdraw.pathmovetoabsolute.md) — Inicia um novo subcaminho
- [ImagickDraw::pathMoveToRelative](imagickdraw.pathmovetorelative.md) — Inicia um novo subcaminho
- [ImagickDraw::pathStart](imagickdraw.pathstart.md) — Declara o início de uma lista de desenho de caminho
- [ImagickDraw::point](imagickdraw.point.md) — Desenha um ponto
- [ImagickDraw::polygon](imagickdraw.polygon.md) — Desenha um polígono
- [ImagickDraw::polyline](imagickdraw.polyline.md) — Desenha uma polilinha
- [ImagickDraw::pop](imagickdraw.pop.md) — Destrói o ImagickDraw atual na pilha e retorna ao ImagickDraw enviado anteriormente
- [ImagickDraw::popClipPath](imagickdraw.popclippath.md) — Encerra uma definição de caminho de recorte
- [ImagickDraw::popDefs](imagickdraw.popdefs.md) — Encerra uma lista de definições
- [ImagickDraw::popPattern](imagickdraw.poppattern.md) — Encerra uma definição de padrão
- [ImagickDraw::push](imagickdraw.push.md) — Clona o ImagickDraw atual e o coloca na pilha
- [ImagickDraw::pushClipPath](imagickdraw.pushclippath.md) — Inicia uma definição de caminho de recorte
- [ImagickDraw::pushDefs](imagickdraw.pushdefs.md) — Indica que os comandos a seguir criam elementos nomeados para processamento antecipado
- [ImagickDraw::pushPattern](imagickdraw.pushpattern.md) — Indica que os comandos subsequentes até um comando ImagickDraw::opPattern() compreendem a definição de um padrão nomeado
- [ImagickDraw::rectangle](imagickdraw.rectangle.md) — Desenha um retângulo
- [ImagickDraw::render](imagickdraw.render.md) — Renderiza todos os comandos de desenho anteriores na imagem
- [ImagickDraw::resetVectorGraphics](imagickdraw.resetvectorgraphics.md) — Redefine os gráficos vetoriais
- [ImagickDraw::rotate](imagickdraw.rotate.md) — Aplica a rotação especificada ao espaço de coordenadas atual
- [ImagickDraw::roundRectangle](imagickdraw.roundrectangle.md) — Desenha um retângulo arredondado
- [ImagickDraw::scale](imagickdraw.scale.md) — Ajusta o fator de escala
- [ImagickDraw::setClipPath](imagickdraw.setclippath.md) — Associa um caminho de recorte nomeado à imagem
- [ImagickDraw::setClipRule](imagickdraw.setcliprule.md) — Define a regra de preenchimento do polígono a ser usada pelo traçado de recorte
- [ImagickDraw::setClipUnits](imagickdraw.setclipunits.md) — Define a interpretação das unidades do caminho de recorte
- [ImagickDraw::setFillAlpha](imagickdraw.setfillalpha.md) — Define a opacidade a ser usada ao desenhar usando a cor ou textura de preenchimento
- [ImagickDraw::setFillColor](imagickdraw.setfillcolor.md) — Define a cor de preenchimento a ser usada para desenhar objetos preenchidos
- [ImagickDraw::setFillOpacity](imagickdraw.setfillopacity.md) — Define a opacidade a ser usada ao desenhar usando a cor ou textura de preenchimento
- [ImagickDraw::setFillPatternURL](imagickdraw.setfillpatternurl.md) — Define a URL a ser usada como padrão de preenchimento para preencher objetos
- [ImagickDraw::setFillRule](imagickdraw.setfillrule.md) — Define a regra de preenchimento a ser usada ao desenhar polígonos
- [ImagickDraw::setFont](imagickdraw.setfont.md) — Define a fonte totalmente especificada a ser usada ao fazer anotações com texto
- [ImagickDraw::setFontFamily](imagickdraw.setfontfamily.md) — Define a família de fontes a ser usada ao fazer anotações com texto
- [ImagickDraw::setFontSize](imagickdraw.setfontsize.md) — Define o tamanho da fonte a ser usado ao fazer anotações com texto
- [ImagickDraw::setFontStretch](imagickdraw.setfontstretch.md) — Define o esticamento da fonte a ser usado ao fazer anotações com texto
- [ImagickDraw::setFontStyle](imagickdraw.setfontstyle.md) — Define o estilo da fonte a ser usado ao fazer anotações com texto
- [ImagickDraw::setFontWeight](imagickdraw.setfontweight.md) — Define a espessura da fonte
- [ImagickDraw::setGravity](imagickdraw.setgravity.md) — Define a gravidade do posicionamento do texto
- [ImagickDraw::setResolution](imagickdraw.setresolution.md) — Define a resolução
- [ImagickDraw::setStrokeAlpha](imagickdraw.setstrokealpha.md) — Especifica a opacidade dos contornos dos objetos traçados
- [ImagickDraw::setStrokeAntialias](imagickdraw.setstrokeantialias.md) — Controla se os contornos traçados são suavizados
- [ImagickDraw::setStrokeColor](imagickdraw.setstrokecolor.md) — Define a cor usada para traçar os contornos dos objetos
- [ImagickDraw::setStrokeDashArray](imagickdraw.setstrokedasharray.md) — Especifica o padrão de traços e espaços usados ​​para traçar caminhos
- [ImagickDraw::setStrokeDashOffset](imagickdraw.setstrokedashoffset.md) — Especifica o deslocamento no padrão de traço para iniciar o traço
- [ImagickDraw::setStrokeLineCap](imagickdraw.setstrokelinecap.md) — Especifica a forma a ser usada no final dos subcaminhos abertos quando eles são traçados
- [ImagickDraw::setStrokeLineJoin](imagickdraw.setstrokelinejoin.md) — Especifica a forma a ser usada nos cantos dos caminhos quando eles são traçados
- [ImagickDraw::setStrokeMiterLimit](imagickdraw.setstrokemiterlimit.md) — Especifica o limite de esquadria
- [ImagickDraw::setStrokeOpacity](imagickdraw.setstrokeopacity.md) — Especifica a opacidade dos contornos dos objetos traçados
- [ImagickDraw::setStrokePatternURL](imagickdraw.setstrokepatternurl.md) — Define o padrão usado para traçar contornos de objetos
- [ImagickDraw::setStrokeWidth](imagickdraw.setstrokewidth.md) — Define a largura do traço usado para desenhar contornos de objetos
- [ImagickDraw::setTextAlignment](imagickdraw.settextalignment.md) — Especifica um alinhamento de texto
- [ImagickDraw::setTextAntialias](imagickdraw.settextantialias.md) — Controla se o texto é suavizado
- [ImagickDraw::setTextDecoration](imagickdraw.settextdecoration.md) — Especifica uma decoração
- [ImagickDraw::setTextEncoding](imagickdraw.settextencoding.md) — Especifica o conjunto de caracteres do texto
- [ImagickDraw::setTextInterlineSpacing](imagickdraw.settextinterlinespacing.md) — Define o espaçamento entre linhas do texto
- [ImagickDraw::setTextInterwordSpacing](imagickdraw.settextinterwordspacing.md) — Define o espaçamento entre palavras do texto
- [ImagickDraw::setTextKerning](imagickdraw.settextkerning.md) — Define o espaçamento entre letras do texto
- [ImagickDraw::setTextUnderColor](imagickdraw.settextundercolor.md) — Especifica a cor de um retângulo de fundo
- [ImagickDraw::setVectorGraphics](imagickdraw.setvectorgraphics.md) — Define os gráficos vetoriais
- [ImagickDraw::setViewbox](imagickdraw.setviewbox.md) — Define o tamanho geral da tela
- [ImagickDraw::skewX](imagickdraw.skewx.md) — Inclina o sistema de coordenadas atual na direção horizontal
- [ImagickDraw::skewY](imagickdraw.skewy.md) — Inclina o sistema de coordenadas atual na direção vertical
- [ImagickDraw::translate](imagickdraw.translate.md) — Aplica uma translação no sistema de coordenadas atual

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
