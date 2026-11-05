# Descarta todas, exceto uma, de qualquer cor de pixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.uniqueimagecolors.php

---

# Imagick::uniqueImageColors

(PECL imagick 2,PECL imagick 3)

Imagick::uniqueImageColors — Descarta todas, exceto uma, de qualquer cor de pixel

### Descrição

public function **Imagick::uniqueImageColors**(): [bool](language.types.boolean.md)

Descarta todas, exceto uma, de qualquer cor de pixel.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::uniqueImageColors()****

```
<?php
function uniqueImageColors($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    // Reduz a imagem para 256 cores
    $imagick->quantizeImage(256, \Imagick::COLORSPACE_YIQ, 0, false, false);
    $imagick->uniqueImageColors();
    $imagick->scaleimage($imagick->getImageWidth(), $imagick->getImageHeight() * 20);
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
