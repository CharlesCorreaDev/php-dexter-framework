# Define a qualidade de compactação padrão do objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setcompressionquality.php

---

# Imagick::setCompressionQuality

(PECL imagick 2, PECL imagick 3)

Imagick::setCompressionQuality — Define a qualidade de compactação padrão do objeto

### Descrição

public function **Imagick::setCompressionQuality**([int](language.types.integer.md) `$quality`): [bool](language.types.boolean.md)

Define a qualidade de compactação padrão do objeto.

**Cuidado**

Este método só funciona para novas imagens, por ex. aqueles criados através do Imagick::newPseudoImage. Para imagens existentes deve ser usado o método [Imagick::setImageCompressionQuality()](imagick.setimagecompressionquality.md).

### Parâmetros

`quality`
:   Um [int](language.types.integer.md) entre 1 e 100, 1 = alta compactação, 100 baixa compactação.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::setCompressionQuality()****

```
<?php
function setCompressionQuality($imagePath, $quality) {

    $backgroundImagick = new \Imagick(realpath($imagePath));
    $imagick = new \Imagick();
    $imagick->setCompressionQuality($quality);
    $imagick->newPseudoImage(
        $backgroundImagick->getImageWidth(),
        $backgroundImagick->getImageHeight(),
        'canvas:white'
    );

    $imagick->compositeImage(
        $backgroundImagick,
        \Imagick::COMPOSITE_ATOP,
        0,
        0
    );

    $imagick->setFormat("jpg");
    header("Content-Type: image/jpg");
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
