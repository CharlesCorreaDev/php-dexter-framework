# Reduz a imagem a um número limitado de níveis de cor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.posterizeimage.php

---

# Imagick::posterizeImage

(PECL imagick 2, PECL imagick 3)

Imagick::posterizeImage — Reduz a imagem a um número limitado de níveis de cor

### Descrição

public function **Imagick::posterizeImage**([int](language.types.integer.md) `$levels`, [bool](language.types.boolean.md) `$dither`): [bool](language.types.boolean.md)

Reduz a imagem a um número limitado de níveis de cor.

### Parâmetros

`levels`

`dither`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::posterizeImage()****

```
<?php
function posterizeImage($imagePath, $posterizeType, $numberLevels) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->posterizeImage($numberLevels, $posterizeType);
    $imagick->setImageFormat('png');
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
}

posterizeImage($imagePath, \Imagick::DITHERMETHOD_RIEMERSMA, 8);

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
