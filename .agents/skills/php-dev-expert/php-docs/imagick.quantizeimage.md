# Analisa as cores dentro de uma imagem de referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.quantizeimage.php

---

# Imagick::quantizeImage

(PECL imagick 2, PECL imagick 3)

Imagick::quantizeImage — Analisa as cores dentro de uma imagem de referência

### Descrição

public function **Imagick::quantizeImage**(  
    [int](language.types.integer.md) `$numberColors`,  
    [int](language.types.integer.md) `$colorspace`,  
    [int](language.types.integer.md) `$treedepth`,  
    [bool](language.types.boolean.md) `$dither`,  
    [bool](language.types.boolean.md) `$measureError`  
): [bool](language.types.boolean.md)

### Parâmetros

`numberColors`

`colorspace`

`treedepth`

`dither`

`measureError`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::quantizeImage()****

```
<?php
function quantizeImage($imagePath, $numberColors, $colorSpace, $treeDepth, $dither) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->quantizeImage($numberColors, $colorSpace, $treeDepth, $dither, false);
    $imagick->setImageFormat('png');
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
