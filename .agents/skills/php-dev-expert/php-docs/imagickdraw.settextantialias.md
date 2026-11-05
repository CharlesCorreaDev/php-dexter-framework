# Controla se o texto é suavizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.settextantialias.php

---

# ImagickDraw::setTextAntialias

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setTextAntialias — Controla se o texto é suavizado

### Descrição

public function **ImagickDraw::setTextAntialias**([bool](language.types.boolean.md) `$antialias`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Controla se o texto é suavizado. Texto é suavizado por padrão.

### Parâmetros

`antialias`

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setTextAntialias()****

```
<?php
function setTextAntialias($fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();
    $draw->setStrokeColor('none');
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(1);
    $draw->setFontSize(32);
    $draw->setTextAntialias(false);
    $draw->annotation(5, 30, "Lorem Ipsum!");
    $draw->setTextAntialias(true);
    $draw->annotation(5, 65, "Lorem Ipsum!");

    $imagick = new \Imagick();
    $imagick->newImage(220, 80, $backgroundColor);
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);

    // Aumenta a imagem para que a suavização possa ser visualizada.
    $imagick->scaleImage(220 * 6, 80 * 6);
    $imagick->cropImage(640, 480, 0, 0);

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
