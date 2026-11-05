# Declara o início de uma lista de desenho de caminho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pathstart.php

---

# ImagickDraw::pathStart

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pathStart — Declara o início de uma lista de desenho de caminho

### Descrição

public function **ImagickDraw::pathStart**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Declara o início de uma lista de desenho de caminho que é finalizada por um
comando DrawPathFinish() correspondente. Todos os outros comandos DrawPath devem ser colocados
entre um comando DrawPathStart() e um comando DrawPathFinish(). Isso ocorre porque os comandos
de desenho de caminho são comandos subordinados e não funcionam sozinhos.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::pathStart()****

```
<?php
function pathStart($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);

    $draw->pathStart();
    $draw->pathMoveToAbsolute(50, 50);
    $draw->pathLineToAbsolute(100, 50);
    $draw->pathLineToRelative(0, 50);
    $draw->pathLineToHorizontalRelative(-50);
    $draw->pathFinish();

    $draw->pathStart();
    $draw->pathMoveToAbsolute(50, 50);
    $draw->pathMoveToRelative(300, 0);
    $draw->pathLineToRelative(50, 0);
    $draw->pathLineToVerticalRelative(50);
    $draw->pathLineToHorizontalAbsolute(350);
    $draw->pathclose();
    $draw->pathFinish();

    $draw->pathStart();
    $draw->pathMoveToAbsolute(50, 300);
    $draw->pathCurveToAbsolute(50, 300, 100, 200, 300, 300);
    $draw->pathLineToVerticalAbsolute(350);
    $draw->pathFinish();

    $imagick = new \Imagick();
    $imagick->newImage(500, 500, $backgroundColor);
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
