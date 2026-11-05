# Aplica transformação de cores a uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.colormatriximage.php

---

# Imagick::colorMatrixImage

(PECL imagick 3 >= 3.3.0)

Imagick::colorMatrixImage — Aplica transformação de cores a uma imagem

### Descrição

public function **Imagick::colorMatrixImage**([array](language.types.array.md) `$color_matrix`): [bool](language.types.boolean.md)

Aplica transformação de cores a uma imagem. O método permite alterações de saturação, rotação de matiz, luminância para alfa e vários outros efeitos. Embora matrizes de transformação de tamanho variável possam ser usadas, normalmente é usada uma matriz 5x5 para uma imagem RGBA e 6x6 para CMYKA (ou RGBA com deslocamentos). A matriz é semelhante àquelas usadas pelo Adobe Flash, exceto que os deslocamentos estão na coluna 6 em vez da 5 (para suporte a imagens CMYKA) e os deslocamentos são normalizados (divida o deslocamento do Flash por 255).

### Parâmetros

`color_matrix`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::colorMatrixImage()****

```
<?php
function colorMatrixImage($imagePath, $colorMatrix) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->setImageOpacity(1);

    // Uma matriz de cores deve se parecer com:
    //    $colorMatrix = [
    //        1.5, 0.0, 0.0, 0.0, 0.0, -0.157,
    //        0.0, 1.0, 0.5, 0.0, 0.0, -0.157,
    //        0.0, 0.0, 1.5, 0.0, 0.0, -0.157,
    //        0.0, 0.0, 0.0, 1.0, 0.0,  0.0,
    //        0.0, 0.0, 0.0, 0.0, 1.0,  0.0,
    //        0.0, 0.0, 0.0, 0.0, 0.0,  1.0
    //    ];

    $background = new \Imagick();
    $background->newPseudoImage($imagick->getImageWidth(), $imagick->getImageHeight(),  "pattern:checkerboard");

    $background->setImageFormat('png');

    $imagick->setImageFormat('png');
    $imagick->colorMatrixImage($colorMatrix);

    $background->compositeImage($imagick, \Imagick::COMPOSITE_ATOP, 0, 0);

    header("Content-Type: image/png");
    echo $background->getImageBlob();
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
