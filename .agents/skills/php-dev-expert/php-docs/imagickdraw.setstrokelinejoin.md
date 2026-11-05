# Especifica a forma a ser usada nos cantos dos caminhos quando eles são traçados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokelinejoin.php

---

# ImagickDraw::setStrokeLineJoin

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeLineJoin — Especifica a forma a ser usada nos cantos dos caminhos quando eles são traçados

### Descrição

public function **ImagickDraw::setStrokeLineJoin**([int](language.types.integer.md) `$linejoin`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica a forma a ser usada nos cantos dos caminhos (ou outras
formas vetoriais) quando eles são traçados.

### Parâmetros

`linejoin`
:   Uma das constantes [LINEJOIN](imagick.constants.md#imagick.constants.linejoin)
    (`imagick::LINEJOIN_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeLineJoin()****

```
<?php
function setStrokeLineJoin($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();
    $draw->setStrokeWidth(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(20);

    $offset = 220;

    $lineJoinStyle = [
        \Imagick::LINEJOIN_MITER,
        \Imagick::LINEJOIN_ROUND,
        \Imagick::LINEJOIN_BEVEL,
        ];

    for ($x = 0; $x < count($lineJoinStyle); $x++) {
        $draw->setStrokeLineJoin($lineJoinStyle[$x]);
        $points = [
            ['x' => 40 * 5, 'y' => 10 * 5 + $x * $offset],
            ['x' => 20 * 5, 'y' => 20 * 5 + $x * $offset],
            ['x' => 70 * 5, 'y' => 50 * 5 + $x * $offset],
            ['x' => 40 * 5, 'y' => 10 * 5 + $x * $offset],
        ];

        $draw->polyline($points);
    }

    $image = new \Imagick();
    $image->newImage(500, 700, $backgroundColor);
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
