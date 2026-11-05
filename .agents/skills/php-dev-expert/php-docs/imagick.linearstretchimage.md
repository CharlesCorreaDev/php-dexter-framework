# Estica com saturação a intensidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.linearstretchimage.php

---

# Imagick::linearStretchImage

(PECL imagick 2, PECL imagick 3)

Imagick::linearStretchImage — Estica com saturação a intensidade da imagem

### Descrição

public function **Imagick::linearStretchImage**([float](language.types.float.md) `$blackPoint`, [float](language.types.float.md) `$whitePoint`): [bool](language.types.boolean.md)

Estica com saturação a intensidade da imagem.

### Parâmetros

`blackPoint`
:   O ponto preto da imagem.

`whitePoint`
:   O ponto branco da imagem.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::linearStretchImage()****

```
<?php
function linearStretchImage($imagePath, $blackThreshold, $whiteThreshold) {
    $imagick = new \Imagick(realpath($imagePath));
    $pixels = $imagick->getImageWidth() * $imagick->getImageHeight();
    $imagick->linearStretchImage($blackThreshold * $pixels, $whiteThreshold * $pixels);

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
