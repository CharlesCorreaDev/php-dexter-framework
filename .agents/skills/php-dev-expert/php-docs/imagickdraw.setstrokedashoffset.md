# Especifica o deslocamento no padrão de traço para iniciar o traço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokedashoffset.php

---

# ImagickDraw::setStrokeDashOffset

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeDashOffset — Especifica o deslocamento no padrão de traço para iniciar o traço

### Descrição

public function **ImagickDraw::setStrokeDashOffset**([float](language.types.float.md) `$dash_offset`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica o deslocamento no padrão de traço para iniciar o traço.

### Parâmetros

`dash_offset`
:   deslocamento do traço

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeDashOffset()****

```
<?php
function setStrokeDashOffset($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(4);
    $draw->setStrokeDashArray([20, 20]);
    $draw->setStrokeDashOffset(0);
    $draw->rectangle(100, 50, 225, 175);

    //Start the dash effect halfway through the solid portion
    $draw->setStrokeDashOffset(10);
    $draw->rectangle(275, 50, 400, 175);

    //Start the dash effect on the space portion
    $draw->setStrokeDashOffset(20);
    $draw->rectangle(100, 200, 225, 350);
    $draw->setStrokeDashOffset(5);
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
