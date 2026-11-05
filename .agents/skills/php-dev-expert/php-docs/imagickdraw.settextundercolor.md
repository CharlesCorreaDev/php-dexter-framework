# Especifica a cor de um retângulo de fundo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.settextundercolor.php

---

# ImagickDraw::setTextUnderColor

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setTextUnderColor — Especifica a cor de um retângulo de fundo

### Descrição

public function **ImagickDraw::setTextUnderColor**([ImagickPixel](class.imagickpixel.md)|[string](language.types.string.md) `$under_color`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica a cor de um retângulo de fundo a ser colocado sob anotações de texto.

### Parâmetros

`under_color`
:   a cor de fundo

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setTextUnderColor()****

```
<?php
function setTextUnderColor($strokeColor, $fillColor, $backgroundColor, $textUnderColor) {
    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);
    $draw->annotation(50, 75, "Lorem Ipsum!");
    $draw->setTextUnderColor($textUnderColor);
    $draw->annotation(50, 175, "Lorem Ipsum!");

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
