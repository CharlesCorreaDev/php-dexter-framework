# Cria um kernel a partir de um kernel integrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickkernel.frombuiltin.php

---

# ImagickKernel::fromBuiltIn

(PECL imagick >= 3.3.0)

ImagickKernel::fromBuiltIn — Cria um kernel a partir de um kernel integrado

### Descrição

public static function **ImagickKernel::fromBuiltin**([int](language.types.integer.md) `$kernelType`, [string](language.types.string.md) `$kernelString`): [ImagickKernel](class.imagickkernel.md)

Cria um kernel a partir de um kernel integrado. Consulte http://www.imagemagick.org/Usage/morphology/#kernel para obter exemplos. Atualmente os símbolos 'rotation' não são suportados. Exemplo:
$diamondKernel = ImagickKernel::fromBuiltIn(\Imagick::KERNEL\_DIAMOND, "2");

### Parâmetros

`kerneltype`
:   O tipo de kernel a ser construído, por ex. \Imagick::KERNEL\_DIAMOND

`kernelString`
:   Uma string que descreve os parâmetros, por exemplo. "4,2.5"

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **ImagickKernel::fromBuiltin()****

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

function createFromBuiltin($kernelType, $kernelFirstTerm, $kernelSecondTerm, $kernelThirdTerm) {
    $string = '';

    if ($kernelFirstTerm != false && strlen(trim($kernelFirstTerm)) != 0) {
        $string .= $kernelFirstTerm;

        if ($kernelSecondTerm != false && strlen(trim($kernelSecondTerm)) != 0) {
            $string .= ','.$kernelSecondTerm;
            if ($kernelThirdTerm != false && strlen(trim($kernelThirdTerm)) != 0) {
                $string .= ','.$kernelThirdTerm;
            }
        }
    }

    $kernel = ImagickKernel::fromBuiltIn(
        $kernelType,
        $string
    );

    return $kernel;
}

function fromBuiltin($kernelType, $kernelFirstTerm, $kernelSecondTerm, $kernelThirdTerm) {
    $diamondKernel = createFromBuiltin($kernelType, $kernelFirstTerm, $kernelSecondTerm, $kernelThirdTerm);
    $imagick = renderKernel($diamondKernel);

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
}

fromBuiltin(\Imagick::KERNEL_DIAMOND, 2, false, false);

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
