# O construtor de ImagickPixel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.construct.php

---

# ImagickPixel::\_\_construct

(PECL imagick 2, PECL imagick 3)

ImagickPixel::\_\_construct — O construtor de ImagickPixel

### Descrição

public function **ImagickPixel::\_\_construct**([string](language.types.string.md) `$color` = ?)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Constrói um objeto ImagickPixel. Se uma cor for especificada, o objeto será
construído e inicializado com essa cor antes de ser retornado.

### Parâmetros

`color`
:   A string de cores opcional a ser usada como valor inicial deste objeto.

### Valor Retornado

Retorna um objeto ImagickPixel em caso de sucesso, lança uma ImagickPixelException em
caso de falha.

### Examples

**Exemplo #1 Exemplo de **ImagickPixel::construct()****

```
<?php
function construct() {

    $columns = 4;

    $exampleColors = array(
        "rgba(100%, 0%, 0%, 0.5)",
        "hsb(33.3333%, 100%,  75%)", // verde médio
        "hsl(120, 255,   191.25)", // verde médio
        "graya(50%, 0.5)", // cinza médio semi-transparente
        "LightCoral", "none", // "cmyk(0.9, 0.48, 0.83, 0.50)",
        "#f00", // #rgb
        "#ff0000", // #rrggbb
        "#ff0000ff", // #rrggbbaa
        "#ffff00000000", // #rrrrggggbbbb
        "#ffff00000000ffff", // #rrrrggggbbbbaaaa
        "rgb(255, 0, 0)", // um inteiro na faixa 0—255 para cada componente
        "rgb(100.0%, 0.0%, 0.0%)", // um float na faixa 0—100% para cada componente
        "rgb(255, 0, 0)", // faixa 0 - 255
        "rgba(255, 0, 0, 1.0)", // o mesmo, com um valor alfa explícito
        "rgb(100%, 0%, 0%)", // faixa 0.0% - 100.0%
        "rgba(100%, 0%, 0%, 1.0)", // o mesmo, com um valor alfa explícito
    );

    $draw = new \ImagickDraw();
    $count = 0;
    $black = new \ImagickPixel('rgb(0, 0, 0)');

    foreach ($exampleColors as $exampleColor) {
        $color = new \ImagickPixel($exampleColor);

        $draw->setstrokewidth(1.0);
        $draw->setStrokeColor($black);
        $draw->setFillColor($color);
        $offsetX = ($count % $columns) * 50 + 5;
        $offsetY = intval($count / $columns) * 50 + 5;
        $draw->rectangle(0 + $offsetX, 0 + $offsetY, 40 + $offsetX, 40 + $offsetY);
        $count++;
    }

    $image = new \Imagick();
    $image->newImage(350, 350, "blue");
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
