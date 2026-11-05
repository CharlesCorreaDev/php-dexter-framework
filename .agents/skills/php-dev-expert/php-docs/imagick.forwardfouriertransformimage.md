# Implementa a transformada discreta de Fourier (DFT)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.forwardfouriertransformimage.php

---

# Imagick::forwardFourierTransformImage

(PECL imagick 3 >= 3.3.0)

Imagick::forwardFourierTransformImage — Implementa a transformada discreta de Fourier (DFT)

### Descrição

public function **Imagick::forwardFourierTransformimage**([bool](language.types.boolean.md) `$magnitude`): [bool](language.types.boolean.md)

Implementa a transformada discreta de Fourier (DFT) da imagem como um par magnitude/fase ou imagem real/imaginária.

### Parâmetros

`magnitude`
:   Se verdadeiro, retorna um par magnitude/fase, caso contrário, um par de imagens real/imaginária.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::forwardFourierTransformImage()****

```
<?php
// Função utilitária para forwardTransformImage
function createMask() {
    $draw = new \ImagickDraw();

    $draw->setStrokeOpacity(0);
    $draw->setStrokeColor('rgb(255, 255, 255)');
    $draw->setFillColor('rgb(255, 255, 255)');

    // Desenha um círculo no eixo y, com seu centro
    // em x, y que toca a origem
    $draw->circle(250, 250, 220, 250);

    $imagick = new \Imagick();
    $imagick->newImage(512, 512, "black");
    $imagick->drawImage($draw);
    $imagick->gaussianBlurImage(20, 20);
    $imagick->autoLevelImage();

    return $imagick;
}

function forwardFourierTransformImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->resizeimage(512, 512, \Imagick::FILTER_LANCZOS, 1);

    $mask = createMask();
    $imagick->forwardFourierTransformImage(true);

    @$imagick->setimageindex(0);
    $magnitude = $imagick->getimage();

    @$imagick->setimageindex(1);
    $imagickPhase = $imagick->getimage();

    if (true) {
        $imagickPhase->compositeImage($mask, \Imagick::COMPOSITE_MULTIPLY, 0, 0);
    }

    if (false) {
        $output = clone $imagickPhase;
        $output->setimageformat('png');
        header("Content-Type: image/png");
        echo $output->getImageBlob();
    }

    $magnitude->inverseFourierTransformImage($imagickPhase, true);

    $magnitude->setimageformat('png');
    header("Content-Type: image/png");
    echo $magnitude->getImageBlob();
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
