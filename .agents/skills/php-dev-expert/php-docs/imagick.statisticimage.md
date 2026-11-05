# Modifica a imagem usando uma função estatística

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.statisticimage.php

---

# Imagick::statisticImage

(PECL imagick 3 >= 3.3.0)

Imagick::statisticImage — Modifica a imagem usando uma função estatística

### Descrição

public function **Imagick::statisticImage**(  
    [int](language.types.integer.md) `$type`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Substitui cada pixel pela estatística correspondente da vizinhança na largura e altura especificadas.

### Parâmetros

`type`

`width`

`height`

`channel`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::statisticImage()****

```
<?php
function statisticImage($imagePath, $statisticType, $width, $height, $channel) {
    $imagick = new \Imagick(realpath($imagePath));

    $imagick->statisticImage(
        $statisticType,
        $width,
        $height,
        $channel
    );

    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

statisticImage($imagePath, \Imagick::STATISTIC_MEDIAN, 5, 5, \Imagick::CHANNEL_DEFAULT);

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
