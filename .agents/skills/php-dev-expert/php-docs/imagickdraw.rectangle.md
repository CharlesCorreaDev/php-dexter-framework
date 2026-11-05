# Desenha um retângulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.rectangle.php

---

# ImagickDraw::rectangle

(PECL imagick 2, PECL imagick 3)

ImagickDraw::rectangle — Desenha um retângulo

### Descrição

public function **ImagickDraw::rectangle**(  
    [float](language.types.float.md) `$top_left_x`,  
    [float](language.types.float.md) `$top_left_y`,  
    [float](language.types.float.md) `$bottom_right_x`,  
    [float](language.types.float.md) `$bottom_right_y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um retângulo com duas coordenadas e usando as configurações atuais de traçado,
largura do traçado e preenchimento.

### Parâmetros

`top_left_x`
:   coordenada x do canto superior esquerdo

`top_left_y`
:   coordenada y do canto superior esquerdo

`bottom_right_x`
:   coordenada x do canto inferior direito

`bottom_right_y`
:   coordenada y do canto inferior direito

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::rectangle()****

```
<?php
function rectangle($strokeColor, $fillColor, $backgroundColor) {
    $draw = new \ImagickDraw();
    $strokeColor = new \ImagickPixel($strokeColor);
    $fillColor = new \ImagickPixel($fillColor);

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeWidth(2);

    $draw->rectangle(200, 200, 300, 300);
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
