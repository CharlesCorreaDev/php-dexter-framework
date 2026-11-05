# Aplica a rotação especificada ao espaço de coordenadas atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.rotate.php

---

# ImagickDraw::rotate

(PECL imagick 2, PECL imagick 3)

ImagickDraw::rotate — Aplica a rotação especificada ao espaço de coordenadas atual

### Descrição

public function **ImagickDraw::rotate**([float](language.types.float.md) `$degrees`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Aplica a rotação especificada ao espaço de coordenadas atual.

### Parâmetros

`degrees`
:   graus para rotação

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::rotate()****

```
<?php
function rotate($strokeColor, $fillColor, $backgroundColor, $fillModifiedColor) {
    $draw = new \ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setStrokeOpacity(1);
    $draw->setFillColor($fillColor);
    $draw->rectangle(200, 200, 300, 300);
    $draw->setFillColor($fillModifiedColor);
    $draw->rotate(15);
    $draw->rectangle(200, 200, 300, 300);

    $image = new \Imagick();
    $image->newImage(500, 500, $backgroundColor);
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
