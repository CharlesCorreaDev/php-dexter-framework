# Define os fatores de amostragem da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setsamplingfactors.php

---

# Imagick::setSamplingFactors

(PECL imagick 2, PECL imagick 3)

Imagick::setSamplingFactors — Define os fatores de amostragem da imagem

### Descrição

public function **Imagick::setSamplingFactors**([array](language.types.array.md) `$factors`): [bool](language.types.boolean.md)

Define os fatores de amostragem da imagem.

### Parâmetros

`factors`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::setSamplingFactors()****

```
<?php
function setSamplingFactors($imagePath) {

    $imagePath = "../imagick/imagens/DetalheFino.png";
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->setImageFormat('jpg');
    $imagick->setSamplingFactors(array('2x2', '1x1', '1x1'));

    $compressed = $imagick->getImageBlob();

    $reopen = new \Imagick();
    $reopen->readImageBlob($compressed);

    $reopen->resizeImage(
        $reopen->getImageWidth() * 4,
        $reopen->getImageHeight() * 4,
        \Imagick::FILTER_POINT,
        1
    );

    header("Content-Type: image/jpg");
    echo $reopen->getImageBlob();
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
