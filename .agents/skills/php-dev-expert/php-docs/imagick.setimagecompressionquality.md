# Define a qualidade de compactação da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagecompressionquality.php

---

# Imagick::setImageCompressionQuality

(PECL imagick 2, PECL imagick 3)

Imagick::setImageCompressionQuality — Define a qualidade de compactação da imagem

### Descrição

public function **Imagick::setImageCompressionQuality**([int](language.types.integer.md) `$quality`): [bool](language.types.boolean.md)

Define a qualidade de compactação da imagem.

### Parâmetros

`quality`
:   A qualidade de compactação da imagem como um número inteiro.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::setImageCompressionQuality()****

```
<?php
function setImageCompressionQuality($imagePath, $quality) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->setImageCompressionQuality($quality);
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
