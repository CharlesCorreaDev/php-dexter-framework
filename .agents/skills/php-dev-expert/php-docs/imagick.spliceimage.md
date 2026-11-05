# Une uma cor sólida na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.spliceimage.php

---

# Imagick::spliceImage

(PECL imagick 2, PECL imagick 3)

Imagick::spliceImage — Une uma cor sólida na imagem

### Descrição

public function **Imagick::spliceImage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [bool](language.types.boolean.md)

Une uma cor sólida na imagem.

### Parâmetros

`width`

`height`

`x`

`y`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::spliceImage()****

```
<?php
function spliceImage($imagePath, $startX, $startY, $width, $height) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->spliceImage($width, $height, $startX, $startY);
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
