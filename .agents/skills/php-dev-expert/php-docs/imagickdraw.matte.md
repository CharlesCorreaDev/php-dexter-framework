# Pinta no canal de opacidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.matte.php

---

# ImagickDraw::matte

(PECL imagick 2, PECL imagick 3)

ImagickDraw::matte — Pinta no canal de opacidade da imagem

### Descrição

public function **ImagickDraw::matte**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`, [int](language.types.integer.md) `$paint`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Pinta no canal de opacidade da imagem para definir os pixels afetados como
transparentes, para influenciar a opacidade dos pixels.

### Parâmetros

`x`
:   Coordenada x da pintura

`y`
:   Coordenada y da pintura

`paint`
:   Uma das constantes [PAINT](imagick.constants.md#imagick.constants.paint)
    (`imagick::PAINT_*`).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::matte()****

```
<?php
function matte($strokeColor, $fillColor, $backgroundColor, $paintType) {
    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);

    $draw->matte(120, 120, $paintType);
    $draw->rectangle(100, 100, 300, 200);

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
