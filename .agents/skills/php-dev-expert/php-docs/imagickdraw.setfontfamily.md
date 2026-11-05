# Define a família de fontes a ser usada ao fazer anotações com texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfontfamily.php

---

# ImagickDraw::setFontFamily

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFontFamily — Define a família de fontes a ser usada ao fazer anotações com texto

### Descrição

public function **ImagickDraw::setFontFamily**([string](language.types.string.md) `$font_family`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a família de fontes a ser usada ao fazer anotações com texto.

### Parâmetros

`font_family`
:   a família de fontes

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFontFamily()****

```
<?php
function setFontFamily($fillColor, $strokeColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $strokeColor = new \ImagickPixel($strokeColor);
    $fillColor = new \ImagickPixel($fillColor);

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);

    $draw->setFontSize(48);

    $draw->setFontFamily("Times");
    $draw->annotation(50, 50, "Lorem Ipsum!");

    $draw->setFontFamily("AvantGarde");
    $draw->annotation(50, 100, "Lorem Ipsum!");

    $draw->setFontFamily("NewCenturySchlbk");
    $draw->annotation(50, 150, "Lorem Ipsum!");

    $draw->setFontFamily("Palatino");
    $draw->annotation(50, 200, "Lorem Ipsum!");

    $imagick = new \Imagick();
    $imagick->newImage(450, 250, $backgroundColor);
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
