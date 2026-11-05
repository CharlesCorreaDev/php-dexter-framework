# Define a opacidade a ser usada ao desenhar usando a cor ou textura de preenchimento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfillopacity.php

---

# ImagickDraw::setFillOpacity

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFillOpacity — Define a opacidade a ser usada ao desenhar usando a cor ou textura de preenchimento

### Descrição

public function **ImagickDraw::setFillOpacity**([float](language.types.float.md) `$opacity`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a opacidade a ser usada ao desenhar usando a cor ou textura de preenchimento.
Totalmente opaco é 1.0.

### Parâmetros

`opacity`
:   a opacidade de preenchimento

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFillOpacity()****

```
<?php
function setFillOpacity($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeWidth(2);

    $draw->rectangle(100, 200, 200, 300);

    $draw->setFillOpacity(0.4);
    $draw->rectangle(300, 200, 400, 300);

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
