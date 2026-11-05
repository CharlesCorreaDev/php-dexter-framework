# Desenha uma curva quadrática de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathcurvetoquadraticbezierabsolute.php

---

# ImagickDraw::pathCurveToQuadraticBezierAbsolute

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathCurveToQuadraticBezierAbsolute — Desenha uma curva quadrática de Bézier

### Descrição

public function **ImagickDraw::pathCurveToQuadraticBezierAbsolute**(  
    [float](language.types.float.md) `$x1`,  
    [float](language.types.float.md) `$y1`,  
    [float](language.types.float.md) `$x_end`,  
    [float](language.types.float.md) `$y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma curva Bézier quadrática do ponto atual até (x,y) usando
(x1,y1) como ponto de controle usando coordenadas absolutas. No final do
comando, o novo ponto atual se torna o par de coordenadas final (x,y)
usado no polibézier.

### Parâmetros

`x1`
:   coordenada x do ponto de controle

`y1`
:   coordenada y do ponto de controle

`x_end`
:   coordenada x do ponto final

`y`
:   coordenada y do ponto final

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::pathCurveToQuadraticBezierAbsolute()****

```
<?php
function pathCurveToQuadraticBezierAbsolute($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);

    $draw->pathStart();
    $draw->pathMoveToAbsolute(50,250);

    // Isso especifica uma curva Bézier quadrática com a posição atual como ponto
    // inicial, o ponto de controle são os dois primeiros parâmetros e o ponto final são os dois últimos parâmetros.
    $draw->pathCurveToQuadraticBezierAbsolute(
        150,50,
        250,250
    );

    // Isso especifica uma curva Bézier quadrática com a posição atual como ponto
    // inicial, o ponto de controle é espelhado do ponto de controle da curva anterior
    // e o ponto final é definido pelos valores x, y.
    $draw->pathCurveToQuadraticBezierSmoothAbsolute(
        450,250
    );

    // Isso especifica uma curva Bézier quadrática com a posição atual como ponto
    // inicial, o ponto de controle é espelhado do ponto de controle da curva anterior
    // e o ponto final é definido em relação à posição atual pelos valores x, y.
    $draw->pathCurveToQuadraticBezierSmoothRelative(
        200,-100
    );

    $draw->pathFinish();

    $imagick = new \Imagick();
    $imagick->newImage(700, 500, $backgroundColor);
    $imagick->setImageFormat("png");

    $imagick->drawImage($draw);

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();

}

?>
```

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
