# Define a largura do traço usado para desenhar contornos de objetos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokewidth.php

---

# ImagickDraw::setStrokeWidth

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeWidth — Define a largura do traço usado para desenhar contornos de objetos

### Descrição

public function **ImagickDraw::setStrokeWidth**([float](language.types.float.md) `$width`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a largura do traço usado para desenhar contornos de objetos.

### Parâmetros

`width`
:   largura do traço

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeWidth()****

```
<?php
function setStrokeWidth($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeWidth(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->line(100, 100, 400, 145);
    $draw->rectangle(100, 200, 225, 350);
    $draw->setStrokeWidth(5);
    $draw->line(100, 120, 400, 165);
    $draw->rectangle(275, 200, 400, 350);

    $image = new \Imagick();
    $image->newImage(500, 400, $backgroundColor);
    $image->setImageFormat("png");
    $image->drawImage($draw);

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
