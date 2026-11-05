# Especifica a opacidade dos contornos dos objetos traçados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokeopacity.php

---

# ImagickDraw::setStrokeOpacity

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeOpacity — Especifica a opacidade dos contornos dos objetos traçados

### Descrição

public function **ImagickDraw::setStrokeOpacity**([float](language.types.float.md) `$opacity`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica a opacidade dos contornos dos objetos traçados.

### Parâmetros

`opacity`
:   Opacidade do traço. 1.0 é totalmente opaco.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeOpacity()****

```
<?php
function setStrokeOpacity($strokeColor, $fillColor, $backgroundColor) {
    $draw = new \ImagickDraw();

    $draw->setStrokeWidth(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(10);
    $draw->setStrokeOpacity(1);
    $draw->line(100, 80, 400, 125);
    $draw->rectangle(25, 200, 150, 350);
    $draw->setStrokeOpacity(0.5);
    $draw->line(100, 100, 400, 145);
    $draw->rectangle(200, 200, 325, 350);
    $draw->setStrokeOpacity(0.2);
    $draw->line(100, 120, 400, 165);
    $draw->rectangle(375, 200, 500, 350);

    $image = new \Imagick();
    $image->newImage(550, 400, $backgroundColor);
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
