# Especifica um alinhamento de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.settextalignment.php

---

# ImagickDraw::setTextAlignment

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setTextAlignment — Especifica um alinhamento de texto

### Descrição

public function **ImagickDraw::setTextAlignment**([int](language.types.integer.md) `$align`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica um alinhamento de texto a ser aplicado ao fazer anotações com texto.

### Parâmetros

`align`
:   Uma das constantes [ALIGN](imagick.constants.md#imagick.constants.align)
    (`imagick::ALIGN_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setTextAlignment()****

```
<?php
function setTextAlignment($strokeColor, $fillColor, $backgroundColor) {
    $draw = new \ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(1);
    $draw->setFontSize(36);

    $draw->setTextAlignment(\Imagick::ALIGN_LEFT);
    $draw->annotation(250, 75, "Lorem Ipsum!");
    $draw->setTextAlignment(\Imagick::ALIGN_CENTER);
    $draw->annotation(250, 150, "Lorem Ipsum!");
    $draw->setTextAlignment(\Imagick::ALIGN_RIGHT);
    $draw->annotation(250, 225, "Lorem Ipsum!");
    $draw->line(250, 0, 250, 500);

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
