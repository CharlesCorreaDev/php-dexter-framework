# Define o valor Quantum de um elemento de cor do ImagickPixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.setcolorvaluequantum.php

---

# ImagickPixel::setColorValueQuantum

(PECL imagick 2 >=2.3.0, PECL imagick 3)

ImagickPixel::setColorValueQuantum — Define o valor Quantum de um elemento de cor do ImagickPixel

### Descrição

public function **ImagickPixel::setColorValueQuantum**([int](language.types.integer.md) `$color`, [int](language.types.integer.md)|[float](language.types.float.md) `$value`): [bool](language.types.boolean.md)

Define o valor Quantum de um elemento de cor do ImagickPixel.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`color`
:   Que elemento de cor será definido ex.: \Imagick::COLOR\_GREEN.

`value`
:   O valor Quantum para definir o elemento de cor. Deve ser um float se o ImageMagick foi compilado com HDRI, caso contrário, um int no intervalo de 0 a Imagick::getQuantum().

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 **ImagickPixel::setColorValueQuantum()****

```
<?php
function setColorValueQuantum() {
    $image = new \Imagick();

    $quantumRange = $image->getQuantumRange();

    $draw = new \ImagickDraw();
    $color = new \ImagickPixel('blue');
    $color->setcolorValueQuantum(\Imagick::COLOR_RED, 128 * $quantumRange['quantumRangeLong'] / 256);

    $draw->setstrokewidth(1.0);
    $draw->setStrokeColor($color);
    $draw->setFillColor($color);
    $draw->rectangle(200, 200, 300, 300);

    $image->newImage(500, 500, "SteelBlue2");
    $image->setImageFormat("png");

    $image->drawImage($draw);

    header("Content-Type: image/png");
    echo $image->getImageBlob();
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
