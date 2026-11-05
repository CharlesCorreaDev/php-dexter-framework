# Desenha um círculo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.circle.php

---

# ImagickDraw::circle

(PECL imagick 2, PECL imagick 3)

ImagickDraw::circle — Desenha um círculo

### Descrição

public function **ImagickDraw::circle**(  
    [float](language.types.float.md) `$origin_x`,  
    [float](language.types.float.md) `$origin_y`,  
    [float](language.types.float.md) `$perimeter_x`,  
    [float](language.types.float.md) `$perimeter_y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um círculo na imagem.

### Parâmetros

`origin_x`
:   Coordenada x da origem.

`origin_y`
:   Coordenada y da origem.

`perimeter_x`
:   Coordenada x do perímetro.

`perimeter_y`
:   Coordenada y do perímetro.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::circle()****

```
<?php
function circle($strokeColor, $fillColor, $backgroundColor, $originX, $originY, $endX, $endY) {

    // Cria um objeto ImagickDraw onde o círculo será desenhado.
    $draw = new \ImagickDraw();

    $strokeColor = new \ImagickPixel($strokeColor);
    $fillColor = new \ImagickPixel($fillColor);

    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);

    $draw->circle($originX, $originY, $endX, $endY);

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
