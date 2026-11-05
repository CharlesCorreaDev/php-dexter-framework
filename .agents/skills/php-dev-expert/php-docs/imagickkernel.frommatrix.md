# Crie um kernel a partir de uma matriz 2D de valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickkernel.frommatrix.php

---

# ImagickKernel::fromMatrix

(PECL imagick >= 3.3.0)

ImagickKernel::fromMatrix — Crie um kernel a partir de uma matriz 2D de valores

### Descrição

public static function **ImagickKernel::fromMatrix**([array](language.types.array.md) `$matrix`, [array](language.types.array.md) `$origin` = ?): [ImagickKernel](class.imagickkernel.md)

Cria um kernel a partir de uma matriz 2D de valores. Cada valor deve ser um float
(se o elemento deve ser usado) ou 'false' se o elemento deve ser ignorado. Para
matrizes com tamanhos ímpares em ambas as dimensões, o pixel de origem será padronizado
para o centro do kernel. Para todos os outros tamanhos de kernel, o pixel de origem deve ser especificado.

### Parâmetros

`array`
:   Uma matriz (ou seja, array 2D) de valores que definem o kernel. Cada elemento deve ser um valor float ou FALSE se esse elemento não deve ser usado pelo kernel.

`array`
:   Qual elemento do kernel deve ser usado como pixel de origem. Por exemplo, para uma matriz 3x3, especificar a origem como [2, 2] definiria que o elemento inferior direito deveria ser o pixel de origem.

### Valor Retornado

O ImagickKernel gerado.

### Examples

**Exemplo #1 Exemplo de **ImagickKernel::fromMatrix()****

```
<?php

function renderKernel(ImagickKernel $imagickKernel) {
    $matrix = $imagickKernel->getMatrix();

    $imageMargin = 20;

    $tileSize = 20;
    $tileSpace = 4;
    $shadowSigma = 4;
    $shadowDropX = 20;
    $shadowDropY = 0;

    $radius = ($tileSize / 2) * 0.9;

    $rows = count($matrix);
    $columns = count($matrix[0]);

    $imagickDraw = new \ImagickDraw();

    $imagickDraw->setFillColor('#afafaf');
    $imagickDraw->setStrokeColor('none');

    $imagickDraw->translate($imageMargin, $imageMargin);
    $imagickDraw->push();

    ksort($matrix);

    foreach ($matrix as $row) {
        ksort($row);
        $imagickDraw->push();
        foreach ($row as $cell) {
            if ($cell !== false) {
                $color = intval(255 * $cell);
                $colorString = sprintf("rgb(%f, %f, %f)", $color, $color, $color);
                $imagickDraw->setFillColor($colorString);
                $imagickDraw->rectangle(0, 0, $tileSize, $tileSize);
            }
            $imagickDraw->translate(($tileSize + $tileSpace), 0);
        }
        $imagickDraw->pop();
        $imagickDraw->translate(0, ($tileSize + $tileSpace));
    }

    $imagickDraw->pop();

    $width = ($columns * $tileSize) + (($columns - 1) * $tileSpace);
    $height = ($rows * $tileSize) + (($rows - 1) * $tileSpace);

    $imagickDraw->push();
    $imagickDraw->translate($width/2 , $height/2);
    $imagickDraw->setFillColor('rgba(0, 0, 0, 0)');
    $imagickDraw->setStrokeColor('white');
    $imagickDraw->circle(0, 0, $radius - 1, 0);
    $imagickDraw->setStrokeColor('black');
    $imagickDraw->circle(0, 0, $radius, 0);
    $imagickDraw->pop();

    $canvasWidth = $width + (2 * $imageMargin);
    $canvasHeight = $height + (2 * $imageMargin);

    $kernel = new \Imagick();
    $kernel->newPseudoImage(
        $canvasWidth,
        $canvasHeight,
        'canvas:none'
    );

    $kernel->setImageFormat('png');
    $kernel->drawImage($imagickDraw);

    /* cria sombra projetada em sua própria camada */
    $canvas = $kernel->clone();
    $canvas->setImageBackgroundColor(new \ImagickPixel('rgb(0, 0, 0)'));
    $canvas->shadowImage(100, $shadowSigma, $shadowDropX, $shadowDropY);

    $canvas->setImagePage($canvasWidth, $canvasHeight, -5, -5);
    $canvas->cropImage($canvasWidth, $canvasHeight, 0, 0);

    /* compõe text_layer original em shadow_layer */
    $canvas->compositeImage($kernel, \Imagick::COMPOSITE_OVER, 0, 0);
    $canvas->setImageFormat('png');

    return $canvas;
}

function createFromMatrix() {
    $matrix = [
        [0.5, 0, 0.2],
        [0, 1, 0],
        [0.9, 0, false],
    ];

    $kernel = \ImagickKernel::fromMatrix($matrix);

    return $kernel;
}

function fromMatrix() {
    $kernel = createFromMatrix();
    $imagick = renderKernel($kernel);

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
