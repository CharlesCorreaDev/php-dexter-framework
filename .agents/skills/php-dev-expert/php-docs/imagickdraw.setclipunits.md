# Define a interpretação das unidades do caminho de recorte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setclipunits.php

---

# ImagickDraw::setClipUnits

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setClipUnits — Define a interpretação das unidades do caminho de recorte

### Descrição

public function **ImagickDraw::setClipUnits**([int](language.types.integer.md) `$pathunits`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a interpretação das unidades do caminho de recorte.

### Parâmetros

`pathunits`
:   o número de unidades de recorte

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setClipUnits()****

```
<?php
function setClipUnits($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeWidth(2);
    $clipPathName = 'testClipPath';
    $draw->setClipUnits(\Imagick::RESOLUTION_PIXELSPERINCH);
    $draw->pushClipPath($clipPathName);
    $draw->rectangle(0, 0, 250, 250);
    $draw->popClipPath();
    $draw->setClipPath($clipPathName);

    //RESOLUTION_PIXELSPERINCH
    //RESOLUTION_PIXELSPERCENTIMETER

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
