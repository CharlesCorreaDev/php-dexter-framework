# Encerra uma lista de definições

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.popdefs.php

---

# ImagickDraw::popDefs

(PECL imagick 2, PECL imagick 3)

ImagickDraw::popDefs — Encerra uma lista de definições

### Descrição

public function **ImagickDraw::popDefs**(): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Encerra uma lista de definições.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::popDefs()****

```
<?php
function popDefs($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setstrokeOpacity(1);
    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);
    $draw->pushDefs();
    $draw->setStrokeColor('white');
    $draw->rectangle(50, 50, 200, 200);
    $draw->popDefs();

    $draw->rectangle(300, 50, 450, 200);

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
