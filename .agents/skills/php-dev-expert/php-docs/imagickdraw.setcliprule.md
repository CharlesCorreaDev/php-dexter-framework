# Define a regra de preenchimento do polígono a ser usada pelo traçado de recorte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setcliprule.php

---

# ImagickDraw::setClipRule

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setClipRule — Define a regra de preenchimento do polígono a ser usada pelo traçado de recorte

### Descrição

public function **ImagickDraw::setClipRule**([int](language.types.integer.md) `$fillrule`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a regra de preenchimento do polígono a ser usada pelo traçado de recorte.

### Parâmetros

`fillrule`
:   Uma das constantes [FILLRULE](imagick.constants.md#imagick.constants.fillrule)
    (`imagick::FILLRULE_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setClipRule()****

```
<?php
function setClipRule($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeWidth(2);
    //\Imagick::FILLRULE_EVENODD
    //\Imagick::FILLRULE_NONZERO

    $clipPathName = 'testClipPath';
    $draw->pushClipPath($clipPathName);
    $draw->setClipRule(\Imagick::FILLRULE_EVENODD);
    $draw->rectangle(0, 0, 300, 500);
    $draw->rectangle(200, 0, 500, 500);
    $draw->popClipPath();
    $draw->setClipPath($clipPathName);
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
