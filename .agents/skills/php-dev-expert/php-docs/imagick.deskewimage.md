# Remove distorção da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.deskewimage.php

---

# Imagick::deskewImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3 >= 3.3.0)

Imagick::deskewImage — Remove distorção da imagem

### Descrição

public function **Imagick::deskewImage**([float](language.types.float.md) `$threshold`): [bool](language.types.boolean.md)

Este método pode ser usado para remover distorções, por exemplo, de imagens digitalizadas onde o papel
não foi colocado corretamente na superfície de digitalização. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.4.5 ou superior.

### Parâmetros

`threshold`
:   Limite de remoção de desalinhamento

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Imagick::deskewImage()****

```
<?php
function deskewImage($threshold) {
    $imagick = new \Imagick(realpath("images/NYTimes-Page1-11-11-1918.jpg"));
    $deskewImagick = clone $imagick;

    // Esta é a única coisa necessária para o alinhamento.
    $deskewImagick->deskewImage($threshold);

    // O resto deste exemplo é para tornar o resultado óbvio - porque
    // caso contrário o resultado não será óbvio.
    $trim = 9;

    $deskewImagick->cropImage($deskewImagick->getImageWidth() - $trim, $deskewImagick->getImageHeight(), $trim, 0);
    $imagick->cropImage($imagick->getImageWidth() - $trim, $imagick->getImageHeight(), $trim, 0);
    $deskewImagick->resizeimage($deskewImagick->getImageWidth() / 2, $deskewImagick->getImageHeight() / 2, \Imagick::FILTER_LANCZOS, 1);
    $imagick->resizeimage($imagick->getImageWidth() / 2, $imagick->getImageHeight() / 2, \Imagick::FILTER_LANCZOS, 1);
    $newCanvas = new \Imagick();
    $newCanvas->newimage($imagick->getImageWidth() + $deskewImagick->getImageWidth() + 20, $imagick->getImageHeight(), 'red', 'jpg');
    $newCanvas->compositeimage($imagick, \Imagick::COMPOSITE_COPY, 5, 0);
    $newCanvas->compositeimage($deskewImagick, \Imagick::COMPOSITE_COPY, $imagick->getImageWidth() + 10, 0);

    header("Content-Type: image/jpg");
    echo $newCanvas->getImageBlob();
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
