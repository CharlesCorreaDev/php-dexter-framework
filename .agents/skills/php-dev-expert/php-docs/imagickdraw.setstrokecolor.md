# Define a cor usada para traçar os contornos dos objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokecolor.php

---

# ImagickDraw::setStrokeColor

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeColor — Define a cor usada para traçar os contornos dos objetos

### Descrição

public function **ImagickDraw::setStrokeColor**([ImagickPixel](class.imagickpixel.md)|[string](language.types.string.md) `$color`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a cor usada para traçar os contornos dos objetos.

### Parâmetros

`color`
:   a cor do traço

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeColor()****

```
<?php
function setStrokeColor($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(5);

    $draw->line(100, 100, 400, 145);
    $draw->rectangle(100, 200, 225, 350);

    $draw->setStrokeOpacity(0.1);
    $draw->line(100, 120, 400, 165);
    $draw->rectangle(275, 200, 400, 350);

    $image = new \Imagick();
    $image->newImage(500, 400, $backgroundColor);
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
