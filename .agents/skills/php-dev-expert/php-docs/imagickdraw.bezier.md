# Desenha uma curva de Bézier

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.bezier.php

---

# ImagickDraw::bezier

(PECL imagick 2, PECL imagick 3)

ImagickDraw::bezier — Desenha uma curva de Bézier

### Descrição

public function **ImagickDraw::bezier**([array](language.types.array.md) `$coordinates`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma curva de Bézier através de um conjunto de pontos na imagem.

### Parâmetros

`coordinates`
:   Array multidimensional do tipo: array( array( 'x' => 1, 'y' => 2 ),
    array( 'x' => 3, 'y' => 4 ) )

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::bezier()****

```
<?php
function bezier($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $strokeColor = new \ImagickPixel($strokeColor);
    $fillColor = new \ImagickPixel($fillColor);

    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);

    $smoothPointsSet = [
        [
            ['x' => 10.0 * 5, 'y' => 10.0 * 5],
            ['x' => 30.0 * 5, 'y' => 90.0 * 5],
            ['x' => 25.0 * 5, 'y' => 10.0 * 5],
            ['x' => 50.0 * 5, 'y' => 50.0 * 5],
        ],
        [
            ['x' => 50.0 * 5, 'y' => 50.0 * 5],
            ['x' => 75.0 * 5, 'y' => 90.0 * 5],
            ['x' => 70.0 * 5, 'y' => 10.0 * 5],
            ['x' => 90.0 * 5, 'y' => 40.0 * 5],
        ],
    ];

    foreach ($smoothPointsSet as $points) {
        $draw->bezier($points);
    }

    $disjointPoints = [
        [
            ['x' => 10 * 5, 'y' => 10 * 5],
            ['x' => 30 * 5, 'y' => 90 * 5],
            ['x' => 25 * 5, 'y' => 10 * 5],
            ['x' => 50 * 5, 'y' => 50 * 5],
        ],
        [
            ['x' => 50 * 5, 'y' => 50 * 5],
            ['x' => 80 * 5, 'y' => 50 * 5],
            ['x' => 70 * 5, 'y' => 10 * 5],
            ['x' => 90 * 5, 'y' => 40 * 5],
        ]
    ];
    $draw->translate(0, 200);

    foreach ($disjointPoints as $points) {
        $draw->bezier($points);
    }

    // Cria um objeto de imagem no qual os comandos de desenho serão processados
    $imagick = new \Imagick();
    $imagick->newImage(500, 500, $backgroundColor);
    $imagick->setImageFormat("png");

    // Renderiza os comandos de desenho no objeto ImagickDraw
    // da imagem.
    $imagick->drawImage($draw);

    // Envia a imagem para o navegador
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
