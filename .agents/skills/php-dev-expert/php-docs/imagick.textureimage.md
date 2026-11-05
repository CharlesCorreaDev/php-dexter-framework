# Ladrilha repetidamente a imagem da textura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.textureimage.php

---

# Imagick::textureImage

(PECL imagick 2, PECL imagick 3)

Imagick::textureImage — Ladrilha repetidamente a imagem da textura

### Descrição

function **Imagick::textureImage**([Imagick](class.imagick.md) `$texture_wand`): [Imagick](class.imagick.md)

Distribui repetidamente a imagem da textura para a direita e para baixo na tela.

### Parâmetros

`texture_wand`
:   Objeto Imagick para usar como imagem de textura

### Valor Retornado

Retorna um novo objeto Imagick que tem a textura repetida aplicada.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::textureImage()****

```
<?php
function textureImage($imagePath) {
    $image = new \Imagick();
    $image->newImage(640, 480, new \ImagickPixel('pink'));
    $image->setImageFormat("jpg");
    $texture = new \Imagick(realpath($imagePath));
    $texture->scaleimage($image->getimagewidth() / 4, $image->getimageheight() / 4);
    $image = $image->textureImage($texture);
    header("Content-Type: image/jpg");
    echo $image;
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
