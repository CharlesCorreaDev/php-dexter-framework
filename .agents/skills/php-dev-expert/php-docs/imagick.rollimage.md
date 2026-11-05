# Desloca uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.rollimage.php

---

# Imagick::rollImage

(PECL imagick 2, PECL imagick 3)

Imagick::rollImage — Desloca uma imagem

### Descrição

public function **Imagick::rollImage**([int](language.types.integer.md) `$x`, [int](language.types.integer.md) `$y`): [bool](language.types.boolean.md)

Desloca uma imagem conforme definido por x e y.

### Parâmetros

`x`
:   O deslocamento X.

`y`
:   O deslocamento Y.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::rollImage()****

```
<?php
function rollImage($imagePath, $rollX, $rollY) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->rollimage($rollX, $rollY);
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
