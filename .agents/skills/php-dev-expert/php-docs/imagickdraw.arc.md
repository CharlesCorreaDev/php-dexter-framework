# Desenha um arco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.arc.php

---

# ImagickDraw::arc

(PECL imagick 2, PECL imagick 3)

ImagickDraw::arc — Desenha um arco

### Descrição

public function **ImagickDraw::arc**(  
    [float](language.types.float.md) `$start_x`,  
    [float](language.types.float.md) `$start_y`,  
    [float](language.types.float.md) `$end_x`,  
    [float](language.types.float.md) `$end_y`,  
    [float](language.types.float.md) `$start_angle`,  
    [float](language.types.float.md) `$end_angle`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um arco dentro de uma área retangular especificada na imagem.

### Parâmetros

`start_x`
:   coordenada x do começo da área retangular

`start_y`
:   coordenada y do começo da área retangular

`end_x`
:   coordenada x do fim da área retangular

`end_y`
:   coordenada y do fim da área retangular

`start_angle`
:   ângulo inicial, em graus, da rotação

`end_angle`
:   ângulo final, em graus, da rotação

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::arc()****

```
<?php
function arc($strokeColor, $fillColor, $backgroundColor, $startX, $startY, $endX, $endY, $startAngle, $endAngle) {

    // Cria um objeto ImagickDraw onde será desenhado.
    $draw = new \ImagickDraw();
    $draw->setStrokeWidth(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(2);

    $draw->arc($startX, $startY, $endX, $endY, $startAngle, $endAngle);

    // Cria um objeto de imagem no qual os comandos de desenho serão processados
    $image = new \Imagick();
    $image->newImage(IMAGE_WIDTH, IMAGE_HEIGHT, $backgroundColor);
    $image->setImageFormat("png");

    // Renderiza os comandos de desenho no objeto ImagickDraw
    // da imagem.
    $image->drawImage($draw);

    // Envia a imagem ao navegador
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
