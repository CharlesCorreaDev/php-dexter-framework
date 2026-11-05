# Desenha um retângulo arredondado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.roundrectangle.php

---

# ImagickDraw::roundRectangle

(PECL imagick 2, PECL imagick 3)

ImagickDraw::roundRectangle — Desenha um retângulo arredondado

### Descrição

public function **ImagickDraw::roundRectangle**(  
    [float](language.types.float.md) `$top_left_x`,  
    [float](language.types.float.md) `$top_left_y`,  
    [float](language.types.float.md) `$bottom_right_x`,  
    [float](language.types.float.md) `$bottom_right_y`,  
    [float](language.types.float.md) `$rounding_x`,  
    [float](language.types.float.md) `$rounding_y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um retângulo arredondado com duas coordenadas, raios de canto x e y
e usando o traço atual, largura do traço e configurações de preenchimento.

### Parâmetros

`top_left_x`
:   coordenada x do canto superior esquerdo

`top_left_y`
:   coordenada y do canto superior esquerdo

`bottom_right_x`
:   coordenada x do canto inferior direito

`bottom_right_y`
:   coordenada y do canto inferior direito

`rounding_x`
:   raio x de arredondamento

`rounding_y`
:   raio y de arredondamento

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::roundRectangle()****

```
<?php
function roundRectangle($strokeColor, $fillColor, $backgroundColor, $startX, $startY, $endX, $endY, $roundX, $roundY) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeWidth(2);

    $draw->roundRectangle($startX, $startY, $endX, $endY, $roundX, $roundY);

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
