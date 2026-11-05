# Equaliza o histograma da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.equalizeimage.php

---

# Imagick::equalizeImage

(PECL imagick 2, PECL imagick 3)

Imagick::equalizeImage — Equaliza o histograma da imagem

### Descrição

public function **Imagick::equalizeImage**(): [bool](language.types.boolean.md)

Equaliza o histograma da imagem.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::equalizeImage()****

```
<?php
function equalizeImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->equalizeImage();
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
