# Define a regra de preenchimento a ser usada ao desenhar polígonos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfillrule.php

---

# ImagickDraw::setFillRule

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFillRule — Define a regra de preenchimento a ser usada ao desenhar polígonos

### Descrição

public function **ImagickDraw::setFillRule**([int](language.types.integer.md) `$fillrule`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a regra de preenchimento a ser usada ao desenhar polígonos.

### Parâmetros

`fillrule`
:   Uma das constantes [FILLRULE](imagick.constants.md#imagick.constants.fillrule)
    (`imagick::FILLRULE_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFillRule()****

```
<?php
function setFillRule($fillColor, $strokeColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeWidth(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $fillRules = [\Imagick::FILLRULE_NONZERO, \Imagick::FILLRULE_EVENODD];

    $points = 11;
    $size = 150;

    $draw->translate(175, 160);

    for ($x = 0; $x < 2; $x++) {
        $draw->setFillRule($fillRules[$x]);
        $draw->pathStart();
        for ($n = 0; $n < $points * 2; $n++) {

            if ($n >= $points) {
                $angle = fmod($n * 360 * 4 / $points, 360) * pi() / 180;
            }
            else {
                $angle = fmod($n * 360 * 3 / $points, 360) * pi() / 180;
            }

            $positionX = $size * sin($angle);
            $positionY = $size * cos($angle);

            if ($n == 0) {
                $draw->pathMoveToAbsolute($positionX, $positionY);
            }
            else {
                $draw->pathLineToAbsolute($positionX, $positionY);
            }
        }

        $draw->pathClose();
        $draw->pathFinish();

        $draw->translate(325, 0);
    }

    $image = new \Imagick();
    $image->newImage(700, 320, $backgroundColor);
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
