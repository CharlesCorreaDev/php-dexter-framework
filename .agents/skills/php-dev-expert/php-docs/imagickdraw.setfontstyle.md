# Define o estilo da fonte a ser usado ao fazer anotações com texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfontstyle.php

---

# ImagickDraw::setFontStyle

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFontStyle — Define o estilo da fonte a ser usado ao fazer anotações com texto

### Descrição

public function **ImagickDraw::setFontStyle**([int](language.types.integer.md) `$style`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define o estilo da fonte a ser usado ao fazer anotações com texto. A enumeração
AnyStyle atua como uma opção curinga "qualquer estilo".

### Parâmetros

`style`
:   Uma das constantes [STYLE](imagick.constants.md#imagick.constants.styles)
    (`imagick::STYLE_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFontStyle()****

```
<?php
function setFontStyle($fillColor, $strokeColor, $backgroundColor) {
    $draw = new \ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(1);
    $draw->setFontSize(36);
    $draw->setFontStyle(\Imagick::STYLE_NORMAL);
    $draw->annotation(50, 50, "Lorem Ipsum!");

    $draw->setFontStyle(\Imagick::STYLE_ITALIC);
    $draw->annotation(50, 100, "Lorem Ipsum!");

    $draw->setFontStyle(\Imagick::STYLE_OBLIQUE);
    $draw->annotation(50, 150, "Lorem Ipsum!");

    $imagick = new \Imagick();
    $imagick->newImage(350, 300, $backgroundColor);
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
