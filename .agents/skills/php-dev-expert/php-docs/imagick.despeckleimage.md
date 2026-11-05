# Reduz o ruído pontilhado em uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.despeckleimage.php

---

# Imagick::despeckleImage

(PECL imagick 2, PECL imagick 3)

Imagick::despeckleImage — Reduz o ruído pontilhado em uma imagem

### Descrição

public function **Imagick::despeckleImage**(): [bool](language.types.boolean.md)

Reduz o ruído pontilhado em uma imagem, preservando as bordas da imagem original.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::despeckleImage()****

```
<?php
function despeckleImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->despeckleImage();
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
