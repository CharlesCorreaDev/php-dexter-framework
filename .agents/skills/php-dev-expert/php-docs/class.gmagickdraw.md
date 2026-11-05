# A classe GmagickDraw

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gmagickdraw.php

---

# A classe GmagickDraw

(PECL gmagick >= Unknown)

## Introdução

## Resumo da classe

class **GmagickDraw**
{

/\* Métodos \*/

public function [annotate](gmagickdraw.annotate.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`, [string](language.types.string.md) `$text`): [GmagickDraw](class.gmagickdraw.md)

public function [arc](gmagickdraw.arc.md)(  
    [float](language.types.float.md) `$sx`,  
    [float](language.types.float.md) `$sy`,  
    [float](language.types.float.md) `$ex`,  
    [float](language.types.float.md) `$ey`,  
    [float](language.types.float.md) `$sd`,  
    [float](language.types.float.md) `$ed`  
): [GmagickDraw](class.gmagickdraw.md)

public function [bezier](gmagickdraw.bezier.md)([array](language.types.array.md) `$coordinate_array`): [GmagickDraw](class.gmagickdraw.md)

public function [ellipse](gmagickdraw.ellipse.md)(  
    [float](language.types.float.md) `$ox`,  
    [float](language.types.float.md) `$oy`,  
    [float](language.types.float.md) `$rx`,  
    [float](language.types.float.md) `$ry`,  
    [float](language.types.float.md) `$start`,  
    [float](language.types.float.md) `$end`  
): [GmagickDraw](class.gmagickdraw.md)

public function [getfillcolor](gmagickdraw.getfillcolor.md)(): [GmagickPixel](class.gmagickpixel.md)

public function [getfillopacity](gmagickdraw.getfillopacity.md)(): [float](language.types.float.md)

public function [getfont](gmagickdraw.getfont.md)(): [mixed](language.types.mixed.md)

public function [getfontsize](gmagickdraw.getfontsize.md)(): [float](language.types.float.md)

public function [getfontstyle](gmagickdraw.getfontstyle.md)(): [int](language.types.integer.md)

public function [getfontweight](gmagickdraw.getfontweight.md)(): [int](language.types.integer.md)

public function [getstrokecolor](gmagickdraw.getstrokecolor.md)(): [GmagickPixel](class.gmagickpixel.md)

public function [getstrokeopacity](gmagickdraw.getstrokeopacity.md)(): [float](language.types.float.md)

public function [getstrokewidth](gmagickdraw.getstrokewidth.md)(): [float](language.types.float.md)

public function [gettextdecoration](gmagickdraw.gettextdecoration.md)(): [int](language.types.integer.md)

public function [gettextencoding](gmagickdraw.gettextencoding.md)(): [mixed](language.types.mixed.md)

public function [line](gmagickdraw.line.md)(  
    [float](language.types.float.md) `$sx`,  
    [float](language.types.float.md) `$sy`,  
    [float](language.types.float.md) `$ex`,  
    [float](language.types.float.md) `$ey`  
): [GmagickDraw](class.gmagickdraw.md)

public function [point](gmagickdraw.point.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [GmagickDraw](class.gmagickdraw.md)

public function [polygon](gmagickdraw.polygon.md)([array](language.types.array.md) `$coordinates`): [GmagickDraw](class.gmagickdraw.md)

public function [polyline](gmagickdraw.polyline.md)([array](language.types.array.md) `$coordinate_array`): [GmagickDraw](class.gmagickdraw.md)

public function [rectangle](gmagickdraw.rectangle.md)(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`  
): [GmagickDraw](class.gmagickdraw.md)

public function [rotate](gmagickdraw.rotate.md)([float](language.types.float.md) `$degrees`): [GmagickDraw](class.gmagickdraw.md)

public function [roundrectangle](gmagickdraw.roundrectangle.md)(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x2`,  
    [float](language.types.float.md) `$y2`,  
    [float](language.types.float.md) `$rx`,  
    [float](language.types.float.md) `$ry`  
): [GmagickDraw](class.gmagickdraw.md)

public function [scale](gmagickdraw.scale.md)([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [GmagickDraw](class.gmagickdraw.md)

public function [setfillcolor](gmagickdraw.setfillcolor.md)([mixed](language.types.mixed.md) `$color`): [GmagickDraw](class.gmagickdraw.md)

public function [setfillopacity](gmagickdraw.setfillopacity.md)([float](language.types.float.md) `$fill_opacity`): [GmagickDraw](class.gmagickdraw.md)

public function [setfont](gmagickdraw.setfont.md)([string](language.types.string.md) `$font`): [GmagickDraw](class.gmagickdraw.md)

public function [setfontsize](gmagickdraw.setfontsize.md)([float](language.types.float.md) `$pointsize`): [GmagickDraw](class.gmagickdraw.md)

public function [setfontstyle](gmagickdraw.setfontstyle.md)([int](language.types.integer.md) `$style`): [GmagickDraw](class.gmagickdraw.md)

public function [setfontweight](gmagickdraw.setfontweight.md)([int](language.types.integer.md) `$weight`): [GmagickDraw](class.gmagickdraw.md)

public function [setstrokecolor](gmagickdraw.setstrokecolor.md)([mixed](language.types.mixed.md) `$color`): [GmagickDraw](class.gmagickdraw.md)

public function [setstrokeopacity](gmagickdraw.setstrokeopacity.md)([float](language.types.float.md) `$stroke_opacity`): [GmagickDraw](class.gmagickdraw.md)

public function [setstrokewidth](gmagickdraw.setstrokewidth.md)([float](language.types.float.md) `$width`): [GmagickDraw](class.gmagickdraw.md)

public function [settextdecoration](gmagickdraw.settextdecoration.md)([int](language.types.integer.md) `$decoration`): [GmagickDraw](class.gmagickdraw.md)

public function [settextencoding](gmagickdraw.settextencoding.md)([string](language.types.string.md) `$encoding`): [GmagickDraw](class.gmagickdraw.md)

}

## Índice

- [GmagickDraw::annotate](gmagickdraw.annotate.md) — Desenha texto na imagem
- [GmagickDraw::arc](gmagickdraw.arc.md) — Desenha um arco
- [GmagickDraw::bezier](gmagickdraw.bezier.md) — Desenha uma curva de Bézier
- [GmagickDraw::ellipse](gmagickdraw.ellipse.md) — Desenha uma elipse na imagem
- [GmagickDraw::getfillcolor](gmagickdraw.getfillcolor.md) — Retorna a cor de preenchimento
- [GmagickDraw::getfillopacity](gmagickdraw.getfillopacity.md) — Retorna a opacidade usada ao desenhar
- [GmagickDraw::getfont](gmagickdraw.getfont.md) — Retorna a fonte
- [GmagickDraw::getfontsize](gmagickdraw.getfontsize.md) — Retorna o tamanho da fonte em pontos
- [GmagickDraw::getfontstyle](gmagickdraw.getfontstyle.md) — Retorna o estilo da fonte
- [GmagickDraw::getfontweight](gmagickdraw.getfontweight.md) — Retorna o peso da fonte
- [GmagickDraw::getstrokecolor](gmagickdraw.getstrokecolor.md) — Retorna a cor usada para traçar os contornos dos objetos
- [GmagickDraw::getstrokeopacity](gmagickdraw.getstrokeopacity.md) — Retorna a opacidade dos contornos dos objetos traçados
- [GmagickDraw::getstrokewidth](gmagickdraw.getstrokewidth.md) — Retorna a largura do traço usado para desenhar contornos de objetos
- [GmagickDraw::gettextdecoration](gmagickdraw.gettextdecoration.md) — Retorna a decoração do texto
- [GmagickDraw::gettextencoding](gmagickdraw.gettextencoding.md) — Retorna o conjunto de caracteres usado para anotações de texto
- [GmagickDraw::line](gmagickdraw.line.md) — Desenha uma linha
- [GmagickDraw::point](gmagickdraw.point.md) — Desenha um ponto
- [GmagickDraw::polygon](gmagickdraw.polygon.md) — Desenha um polígono
- [GmagickDraw::polyline](gmagickdraw.polyline.md) — Desenha uma polilinha
- [GmagickDraw::rectangle](gmagickdraw.rectangle.md) — Desenha um retângulo
- [GmagickDraw::rotate](gmagickdraw.rotate.md) — Aplica a rotação especificada ao espaço de coordenadas atual
- [GmagickDraw::roundrectangle](gmagickdraw.roundrectangle.md) — Desenha um retângulo arredondado
- [GmagickDraw::scale](gmagickdraw.scale.md) — Ajusta o fator de escala
- [GmagickDraw::setfillcolor](gmagickdraw.setfillcolor.md) — Define a cor de preenchimento a ser usada para desenhar objetos preenchidos
- [GmagickDraw::setfillopacity](gmagickdraw.setfillopacity.md) — Define a opacidade de preenchimento
- [GmagickDraw::setfont](gmagickdraw.setfont.md) — Define a fonte totalmente especificada a ser usada ao fazer anotações com texto
- [GmagickDraw::setfontsize](gmagickdraw.setfontsize.md) — Define o tamanho da fonte a ser usado ao fazer anotações com texto
- [GmagickDraw::setfontstyle](gmagickdraw.setfontstyle.md) — Define o estilo da fonte a ser usado ao fazer anotações com texto
- [GmagickDraw::setfontweight](gmagickdraw.setfontweight.md) — Define o peso da fonte
- [GmagickDraw::setstrokecolor](gmagickdraw.setstrokecolor.md) — Define a cor usada para traçar os contornos dos objetos
- [GmagickDraw::setstrokeopacity](gmagickdraw.setstrokeopacity.md) — Especifica a opacidade dos contornos dos objetos traçados
- [GmagickDraw::setstrokewidth](gmagickdraw.setstrokewidth.md) — Define a largura do traço usado para desenhar contornos de objetos
- [GmagickDraw::settextdecoration](gmagickdraw.settextdecoration.md) — Especifica uma decoração
- [GmagickDraw::settextencoding](gmagickdraw.settextencoding.md) — Especifica a codificação de caracteres de texto

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
