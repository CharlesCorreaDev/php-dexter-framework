# Obtém o valor Quantum de uma cor no ImagickPixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.getcolorvaluequantum.php

---

# ImagickPixel::getColorValueQuantum

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

ImagickPixel::getColorValueQuantum — Obtém o valor Quantum de uma cor no ImagickPixel

### Descrição

public function **ImagickPixel::getColorValueQuantum**([int](language.types.integer.md) `$color`): [int](language.types.integer.md)|[float](language.types.float.md)

Obtém o valor Quantum de uma cor no ImagickPixel. O valor de retorno é em ponto flutuante se o ImageMagick foi compilado com HDRI, caso contrário, é um número inteiro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor Quantum do elemento de cor. Float se o ImageMagick foi compilado com HDRI, caso contrário, um int.

### Examples

**Exemplo #1 **ImagickPixel::getColorValueQuantum()****

```
<?php
    $color = new \ImagickPixel('rgb(128, 5, 255)');
    $colorRed = $color->getColorValueQuantum(\Imagick::COLOR_RED);
    $colorGreen = $color->getColorValueQuantum(\Imagick::COLOR_GREEN);
    $colorBlue = $color->getColorValueQuantum(\Imagick::COLOR_BLUE);
    $colorAlpha = $color->getColorValueQuantum(\Imagick::COLOR_ALPHA);

    printf(
        "Vermelho: %s Verde: %s  Azul %s Alfa: %s",
        $colorRed,
        $colorGreen,
        $colorBlue,
        $colorAlpha
    );

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
