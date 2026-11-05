# Especifica a forma a ser usada no final dos subcaminhos abertos quando eles são traçados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokelinecap.php

---

# ImagickDraw::setStrokeLineCap

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeLineCap — Especifica a forma a ser usada no final dos subcaminhos abertos quando eles são traçados

### Descrição

public function **ImagickDraw::setStrokeLineCap**([int](language.types.integer.md) `$linecap`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica a forma a ser usada no final dos subcaminhos abertos quando eles
são traçados.

### Parâmetros

`linecap`
:   Uma das constantes [LINECAP](imagick.constants.md#imagick.constants.linecap)
    (`imagick::LINECAP_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeLineCap()****

```
<?php
function setStrokeLineCap($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(25);

    $lineTypes = [\Imagick::LINECAP_BUTT, \Imagick::LINECAP_ROUND, \Imagick::LINECAP_SQUARE,];

    $offset = 0;

    foreach ($lineTypes as $lineType) {
        $draw->setStrokeLineCap($lineType);
        $draw->line(50 + $offset, 50, 50 + $offset, 250);
        $offset += 50;
    }

    $imagick = new \Imagick();
    $imagick->newImage(300, 300, $backgroundColor);
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
