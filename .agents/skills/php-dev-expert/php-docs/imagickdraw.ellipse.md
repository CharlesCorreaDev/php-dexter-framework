# Desenha uma elipse na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.ellipse.php

---

# ImagickDraw::ellipse

(PECL imagick 2, PECL imagick 3)

ImagickDraw::ellipse — Desenha uma elipse na imagem

### Descrição

public function **ImagickDraw::ellipse**(  
    [float](language.types.float.md) `$origin_x`,  
    [float](language.types.float.md) `$origin_y`,  
    [float](language.types.float.md) `$radius_x`,  
    [float](language.types.float.md) `$radius_y`,  
    [float](language.types.float.md) `$angle_start`,  
    [float](language.types.float.md) `$angle_end`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma elipse na imagem.

### Parâmetros

`origin_x`

`origin_y`

`radius_x`

`radius_y`

`angle_start`

`angle_end`

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::ellipse()****

```
<?php
function ellipse($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);

    $draw->ellipse(125, 70, 100, 50, 0, 360);
    $draw->ellipse(350, 70, 100, 50, 0, 315);

    $draw->push();
    $draw->translate(125, 250);
    $draw->rotate(30);
    $draw->ellipse(0, 0, 100, 50, 0, 360);
    $draw->pop();

    $draw->push();
    $draw->translate(350, 250);
    $draw->rotate(30);
    $draw->ellipse(0, 0, 100, 50, 0, 315);
    $draw->pop();

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
