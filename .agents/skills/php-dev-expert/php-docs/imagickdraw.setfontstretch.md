# Define o esticamento da fonte a ser usado ao fazer anotações com texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setfontstretch.php

---

# ImagickDraw::setFontStretch

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setFontStretch — Define o esticamento da fonte a ser usado ao fazer anotações com texto

### Descrição

public function **ImagickDraw::setFontStretch**([int](language.types.integer.md) `$stretch`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define o esticamento da fonte a ser usado ao fazer anotações com texto. A enumeração
AnyStretch atua como uma opção curinga "qualquer valor".

### Parâmetros

`stretch`
:   Uma das constantes [STRETCH](imagick.constants.md#imagick.constants.stretch)
    (`imagick::STRETCH_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setFontStretch()****

```
<?php
function setFontStretch($fillColor, $strokeColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(2);
    $draw->setFontSize(36);

    $fontStretchTypes = [
        \Imagick::STRETCH_ULTRACONDENSED,
        \Imagick::STRETCH_CONDENSED,
        \Imagick::STRETCH_SEMICONDENSED,
        \Imagick::STRETCH_SEMIEXPANDED,
        \Imagick::STRETCH_EXPANDED,
        \Imagick::STRETCH_EXTRAEXPANDED,
        \Imagick::STRETCH_ULTRAEXPANDED,
        \Imagick::STRETCH_ANY
    ];

    $offset = 0;
    foreach ($fontStretchTypes as $fontStretch) {
        $draw->setFontStretch($fontStretch);
        $draw->annotation(50, 75 + $offset, "Lorem Ipsum!");
        $offset += 50;
    }

    $imagick = new \Imagick();
    $imagick->newImage(500, 500, $backgroundColor);
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
