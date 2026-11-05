# Transforma uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.affinetransformimage.php

---

# Imagick::affineTransformImage

(PECL imagick 2, PECL imagick 3)

Imagick::affineTransformImage — Transforma uma imagem

### Descrição

public function **Imagick::affineTransformImage**([ImagickDraw](class.imagickdraw.md) `$matrix`): [bool](language.types.boolean.md)

Transforma uma imagem conforme ditado pela matriz afim.

### Parâmetros

`matrix`
:   A matriz afim.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::affineTransformImage()****

```
<?php
function affineTransformImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $draw = new \ImagickDraw();

    $angle = deg2rad(40);

    $affineRotate = array(
        "sx" => cos($angle), "sy" => cos($angle),
        "rx" => sin($angle), "ry" => -sin($angle),
        "tx" => 0, "ty" => 0,
    );

    $draw->affine($affineRotate);

    $imagick->affineTransformImage($draw);

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
