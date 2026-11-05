# Aplica uma translação no sistema de coordenadas atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.translate.php

---

# ImagickDraw::translate

(PECL imagick 2, PECL imagick 3)

ImagickDraw::translate — Aplica uma translação no sistema de coordenadas atual

### Descrição

public function **ImagickDraw::translate**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Aplica uma translação ao sistema de coordenadas atual que move a
origem do sistema de coordenadas para a coordenada especificada.

### Parâmetros

`x`
:   translação horizontal

`y`
:   translação vertical

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::translate()****

```
<?php
function translate($strokeColor, $fillColor, $backgroundColor, $fillModifiedColor,
                   $startX, $startY, $endX, $endY, $translateX, $translateY) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->rectangle($startX, $startY, $endX, $endY);

    $draw->setFillColor($fillModifiedColor);
    $draw->translate($translateX, $translateY);
    $draw->rectangle($startX, $startY, $endX, $endY);

    $image = new \Imagick();
    $image->newImage(500, 500, $backgroundColor);
    $image->setImageFormat("png");

    $image->drawImage($draw);

    header("Content-Type: image/png");
    echo $image->getImageBlob();
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
