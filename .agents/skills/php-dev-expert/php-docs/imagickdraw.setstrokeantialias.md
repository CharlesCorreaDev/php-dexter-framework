# Controla se os contornos traçados são suavizados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setstrokeantialias.php

---

# ImagickDraw::setStrokeAntialias

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setStrokeAntialias — Controla se os contornos traçados são suavizados

### Descrição

public function **ImagickDraw::setStrokeAntialias**([bool](language.types.boolean.md) `$enabled`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Controla se os contornos traçados são suavizados. Os contornos traçados são
suavizados por padrão. Quando a suavização está desabilitada, os pixels traçados
são analisados para determinar se será usada a cor do traço ou a cor
subjacente da tela.

### Parâmetros

`enabled`
:   a configuração da suavização

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setStrokeAntialias()****

```
<?php
function setStrokeAntialias($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(1);
    $draw->setStrokeAntialias(false);
    $draw->line(100, 100, 400, 105);

    $draw->line(100, 140, 400, 185);

    $draw->setStrokeAntialias(true);
    $draw->line(100, 110, 400, 115);
    $draw->line(100, 150, 400, 195);

    $image = new \Imagick();
    $image->newImage(500, 250, $backgroundColor);
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
