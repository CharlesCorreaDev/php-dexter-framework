# Define a espessura da fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfontweight.php

---

# ImagickDraw::setFontWeight

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFontWeight — Define a espessura da fonte

### Descrição

public function **ImagickDraw::setFontWeight**([int](language.types.integer.md) `$weight`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a espessura da fonte a ser usada ao fazer anotações com texto.

### Parâmetros

`weight`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFontWeight()****

```
<?php
function setFontWeight($fillColor, $strokeColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(1);

    $draw->setFontSize(36);

    $draw->setFontWeight(100);
    $draw->annotation(50, 50, "Lorem Ipsum!");

    $draw->setFontWeight(200);
    $draw->annotation(50, 100, "Lorem Ipsum!");

    $draw->setFontWeight(400);
    $draw->annotation(50, 150, "Lorem Ipsum!");

    $draw->setFontWeight(800);
    $draw->annotation(50, 200, "Lorem Ipsum!");

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
