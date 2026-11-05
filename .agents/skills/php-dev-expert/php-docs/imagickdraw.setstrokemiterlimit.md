# Especifica o limite de esquadria

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokemiterlimit.php

---

# ImagickDraw::setStrokeMiterLimit

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeMiterLimit — Especifica o limite de esquadria

### Descrição

public function **ImagickDraw::setStrokeMiterLimit**([int](language.types.integer.md) `$miterlimit`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica o limite de esquadria. Quando dois segmentos de linha se encontram em um ângulo agudo
e as junções de esquadria foram especificadas para 'lineJoin', é possível que
a esquadria se estenda muito além da espessura da linha que traça o
caminho. O 'miterLimit' impõe um limite na proporção entre o comprimento da
esquadria e o 'lineWidth'.

### Parâmetros

`miterlimit`
:   o limite de esquadria

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeMiterLimit()****

```
<?php
function setStrokeMiterLimit($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setStrokeOpacity(0.6);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(10);

    $yOffset = 100;

    $draw->setStrokeLineJoin(\Imagick::LINEJOIN_MITER);

    for ($y = 0; $y < 3; $y++) {

        $draw->setStrokeMiterLimit(40 * $y);

        $points = [
            ['x' => 22 * 3, 'y' => 15 * 4 + $y * $yOffset],
            ['x' => 20 * 3, 'y' => 20 * 4 + $y * $yOffset],
            ['x' => 70 * 5, 'y' => 45 * 4 + $y * $yOffset],
        ];

        $draw->polygon($points);
    }

    $image = new \Imagick();
    $image->newImage(500, 500, $backgroundColor);
    $image->setImageFormat("png");
    $image->drawImage($draw);

    $image->setImageType(\Imagick::IMGTYPE_PALETTE);
    $image->setImageCompressionQuality(100);
    $image->stripImage();

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
