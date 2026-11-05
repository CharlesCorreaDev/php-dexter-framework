# Agrupa todas as imagens do ponteiro da imagem atual até o final da lista de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.smushimages.php

---

# Imagick::smushImages

(PECL imagick 3 >= 3.3.0)

Imagick::smushImages — Agrupa todas as imagens do ponteiro da imagem atual até o final da lista de imagens

### Descrição

public function **Imagick::smushImages**([bool](language.types.boolean.md) `$stack`, [int](language.types.integer.md) `$offset`): [Imagick](class.imagick.md)

Agrupa todas as imagens do ponteiro da imagem atual até o final da lista de imagens,
umas próximas das outras, de cima para baixo se o parâmetro 'stack' for true, ou da esquerda para a direita se for false.

### Parâmetros

`stack`

`offset`

### Valor Retornado

The new smushed image.

### Examples

**Exemplo #1 Exemplo de **Imagick::smushImages()****

```
<?php
function smushImages($imagePath, $imagePath2) {

    $imagick = new \Imagick(realpath($imagePath));
    $imagick2 = new \Imagick(realpath($imagePath2));

    $imagick->addimage($imagick2);
    $smushed = $imagick->smushImages(false, 50);
    $smushed->setImageFormat('jpg');
    header("Content-Type: image/jpg");
    echo $smushed->getImageBlob();
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
