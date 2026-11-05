# Define a cor de preenchimento a ser usada para desenhar objetos preenchidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfillcolor.php

---

# ImagickDraw::setFillColor

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFillColor — Define a cor de preenchimento a ser usada para desenhar objetos preenchidos

### Descrição

public function **ImagickDraw::setFillColor**([ImagickPixel](class.imagickpixel.md)|[string](language.types.string.md) `$fill_color`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a cor de preenchimento a ser usada para desenhar objetos preenchidos.

### Parâmetros

`fill_color`
:   ImagickPixel a ser usado para definir a cor

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFillColor()****

```
<?php
function setFillColor($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeOpacity(1);
    $draw->setStrokeWidth(1.5);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->rectangle(50, 50, 150, 150);

    $draw->setFillColor("rgb(200, 32, 32)");
    $draw->rectangle(200, 50, 300, 150);

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
