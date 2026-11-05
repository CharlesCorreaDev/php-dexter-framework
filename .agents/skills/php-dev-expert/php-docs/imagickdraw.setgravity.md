# Define a gravidade do posicionamento do texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setgravity.php

---

# ImagickDraw::setGravity

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setGravity — Define a gravidade do posicionamento do texto

### Descrição

public function **ImagickDraw::setGravity**([int](language.types.integer.md) `$gravity`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a gravidade do posicionamento do texto a ser usada ao fazer anotações com texto.

### Parâmetros

`gravity`
:   Uma das constantes [GRAVITY](imagick.constants.md#imagick.constants.gravity)
    (`imagick::GRAVITY_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setGravity()****

```
<?php
function setGravity($fillColor, $strokeColor, $backgroundColor) {

    $draw = new \ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(1);
    $draw->setFontSize(24);

    $gravitySettings = array(
        \Imagick::GRAVITY_NORTHWEST => 'NorthWest',
        \Imagick::GRAVITY_NORTH => 'North',
        \Imagick::GRAVITY_NORTHEAST => 'NorthEast',
        \Imagick::GRAVITY_WEST => 'West',
        \Imagick::GRAVITY_CENTER => 'Centre',
        \Imagick::GRAVITY_SOUTHWEST => 'SouthWest',
        \Imagick::GRAVITY_SOUTH => 'South',
        \Imagick::GRAVITY_SOUTHEAST => 'SouthEast',
        \Imagick::GRAVITY_EAST => 'East'
    );

    $draw->setFont("../fonts/Arial.ttf");

    foreach ($gravitySettings as $type => $description) {
        $draw->setGravity($type);
        $draw->annotation(50, 50, '"' . $description . '"');
    }

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
