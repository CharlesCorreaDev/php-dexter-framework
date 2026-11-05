# Inclina o sistema de coordenadas atual na direção vertical

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.skewy.php

---

# ImagickDraw::skewY

(PECL imagick 2, PECL imagick 3)

ImagickDraw::skewY — Inclina o sistema de coordenadas atual na direção vertical

### Descrição

public function **ImagickDraw::skewY**([float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Inclina o sistema de coordenadas atual na direção vertical.

### Parâmetros

`degrees`
:   graus para inclinar

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::skewY()****

```
<?php
function skewY($strokeColor, $fillColor, $backgroundColor, $fillModifiedColor,
               $startX, $startY, $endX, $endY, $skew) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setStrokeWidth(2);
    $draw->setFillColor($fillColor);
    $draw->rectangle($startX, $startY, $endX, $endY);
    $draw->setFillColor($fillModifiedColor);
    $draw->skewY($skew);
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
