# Define a fonte totalmente especificada a ser usada ao fazer anotações com texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfont.php

---

# ImagickDraw::setFont

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFont — Define a fonte totalmente especificada a ser usada ao fazer anotações com texto

### Descrição

public function **ImagickDraw::setFont**([string](language.types.string.md) `$font_name`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define a fonte totalmente especificada a ser usada ao fazer anotações com texto.

### Parâmetros

`font_name`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFont()****

```
<?php
function setFont($fillColor, $strokeColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);
    $draw->setFontSize(36);

    $draw->setFont("../fonts/Arial.ttf");
    $draw->annotation(50, 50, "Lorem Ipsum!");

    $draw->setFont("../fonts/Consolas.ttf");
    $draw->annotation(50, 100, "Lorem Ipsum!");

    $draw->setFont("../fonts/CANDY.TTF");
    $draw->annotation(50, 150, "Lorem Ipsum!");

    $draw->setFont("../fonts/Inconsolata-dz.otf");
    $draw->annotation(50, 200, "Lorem Ipsum!");

    $imagick = new \Imagick();
    $imagick->newImage(500, 300, $backgroundColor);
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);

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
