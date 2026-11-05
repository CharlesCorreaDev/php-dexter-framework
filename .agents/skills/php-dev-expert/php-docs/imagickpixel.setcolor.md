# Define a cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.setcolor.php

---

# ImagickPixel::setColor

(PECL imagick 2, PECL imagick 3)

ImagickPixel::setColor — Define a cor

### Descrição

public function **ImagickPixel::setColor**([string](language.types.string.md) `$color`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a cor descrita pelo objeto ImagickPixel, com uma string
(por exemplo, "blue", "#0000ff", "rgb(0,0,255)", "cmyk(100,100,100,10)", etc.).

### Parâmetros

`color`
:   A definição de cor a ser usada para inicializar o
    objeto ImagickPixel.

### Valor Retornado

Retorna **`true`** se a cor especificada foi definida, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **ImagickPixel::setColor()****

```
<?php
function setColor() {
    $draw = new \ImagickDraw();

    $strokeColor = new \ImagickPixel('green');
    $fillColor = new \ImagickPixel();
    $fillColor->setColor('rgba(100%, 75%, 0%, 1.0)');

    $draw->setstrokewidth(3.0);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->rectangle(200, 200, 300, 300);

    $image = new \Imagick();
    $image->newImage(500, 500, "SteelBlue2");
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
