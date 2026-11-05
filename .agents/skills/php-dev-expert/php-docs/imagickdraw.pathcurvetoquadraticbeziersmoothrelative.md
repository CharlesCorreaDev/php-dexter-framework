# Desenha uma curva quadrática de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php

---

# ImagickDraw::pathCurveToQuadraticBezierSmoothRelative

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathCurveToQuadraticBezierSmoothRelative — Desenha uma curva quadrática de Bézier

### Descrição

public function **ImagickDraw::pathCurveToQuadraticBezierSmoothRelative**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma curva quadrática de Bézier (usando coordenadas relativas) do
ponto atual até (x,y). O ponto de controle é considerado o reflexo
do ponto de controle no comando anterior em relação ao ponto atual.
(Se não houver nenhum comando anterior ou se o comando anterior não for
DrawPathCurveToQuadraticBezierAbsolute,
DrawPathCurveToQuadraticBezierRelative,
DrawPathCurveToQuadraticBezierSmoothAbsolut ou
DrawPathCurveToQuadraticBezierSmoothRelative, assume que o ponto de controle é
coincidente com o ponto atual.). No final do comando, o novo ponto
atual se torna o par de coordenadas final (x,y) usado no
polibézier.

Esta função não pode ser usada para continuar suavemente uma curva de Bézier cúbica. Só pode continuar suavemente a partir de uma curva quadrática.

### Parâmetros

`x`
:   coordenada x final

`y`
:   coordenada y final

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1
Exemplo de **ImagickDraw::pathCurveToQuadraticBezierSmoothRelative()****

```
<?php
$draw = new \ImagickDraw();

$draw->setStrokeOpacity(1);
$draw->setStrokeColor("black");
$draw->setFillColor("blue");

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
