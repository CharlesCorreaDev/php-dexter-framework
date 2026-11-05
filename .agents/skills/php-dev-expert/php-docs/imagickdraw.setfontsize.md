# Define o tamanho da fonte a ser usado ao fazer anotações com texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfontsize.php

---

# ImagickDraw::setFontSize

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFontSize — Define o tamanho da fonte a ser usado ao fazer anotações com texto

### Descrição

public function **ImagickDraw::setFontSize**([float](language.types.float.md) `$point_size`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define o tamanho da fonte a ser usado ao fazer anotações com texto.

### Parâmetros

`point_size`
:   o tamanho da fonte em pontos

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFontSize()****

```
<?php
function setFontSize($fillColor, $strokeColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(2);
    $draw->setFont("../fonts/Arial.ttf");

    $sizes = [24, 36, 48, 60, 72];

    foreach ($sizes as $size) {
        $draw->setFontSize($size);
        $draw->annotation(50, ($size * $size / 16), "Lorem Ipsum!");
    }

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
