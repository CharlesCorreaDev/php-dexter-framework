# Define a máscara de recorte da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageclipmask.php

---

# Imagick::setImageClipMask

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::setImageClipMask — Define a máscara de recorte da imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::setImageClipMask**([Imagick](class.imagick.md) `$clip_mask`): [bool](language.types.boolean.md)

Define a máscara de recorte da imagem a partir de outro objeto Imagick.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`clip_mask`
:   O objeto Imagick que contém a máscara de recorte.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::setImageClipMask()****

```
<?php
function setImageClipMask($imagePath) {
    $imagick = new \Imagick();
    $imagick->readImage(realpath($imagePath));

    $width = $imagick->getImageWidth();
    $height = $imagick->getImageHeight();

    $clipMask = new \Imagick();
    $clipMask->newPseudoImage(
        $width,
        $height,
        "canvas:transparent"
    );

    $draw = new \ImagickDraw();
    $draw->setFillColor('white');
    $draw->circle(
        $width / 2,
        $height / 2,
        ($width / 2) + ($width / 4),
        $height / 2
    );
    $clipMask->drawImage($draw);
    $imagick->setImageClipMask($clipMask);

    $imagick->negateImage(false);
    $imagick->setFormat("png");

    header("Content-Type: image/png");
    echo $imagick->getImagesBlob();

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
