# Silencia as cores da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.blueshiftimage.php

---

# Imagick::blueShiftImage

(PECL imagick 3 >= 3.3.0)

Imagick::blueShiftImage — Silencia as cores da imagem

### Descrição

public function **Imagick::blueShiftImage**([float](language.types.float.md) `$factor` = 1.5): [bool](language.types.boolean.md)

Silencia as cores da imagem para simular uma cena noturna sob o luar.

### Parâmetros

`factor`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::blueShiftImage()****

```
<?php
function blueShiftImage($imagePath, $blueShift) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->blueShiftImage($blueShift);
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
