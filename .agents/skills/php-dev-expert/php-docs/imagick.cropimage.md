# Extrai uma região da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.cropimage.php

---

# Imagick::cropImage

(PECL imagick 2, PECL imagick 3)

Imagick::cropImage — Extrai uma região da imagem

### Descrição

public function **Imagick::cropImage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Extrai uma região da imagem.

### Parâmetros

`width`
:   A largura do recorte

`height`
:   A altura do recorte

`x`
:   A coordenada X do canto superior esquerdo da região recortada

`y`
:   A coordenada Y do canto superior esquerdo da região recortada

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::cropImage()****

```
<?php
function cropImage($imagePath, $startX, $startY, $width, $height) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->cropImage($width, $height, $startX, $startY);
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
