# Desfoca uma imagem de forma radial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.radialblurimage.php

---

# Imagick::radialBlurImage

(PECL imagick 2, PECL imagick 3)

Imagick::radialBlurImage — Desfoca uma imagem de forma radial

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::radialBlurImage**([float](language.types.float.md) `$angle`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Desfoca uma imagem de forma radial.

### Parâmetros

`angle`

`channel`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::radialBlurImage()****

```
<?php
function radialBlurImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    // Desfoce 3 vezes com raios diferentes
    $imagick->radialBlurImage(3);
    $imagick->radialBlurImage(5);
    $imagick->radialBlurImage(7);
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
