# Desenha uma polilinha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.polyline.php

---

# ImagickDraw::polyline

(PECL imagick 2, PECL imagick 3)

ImagickDraw::polyline — Desenha uma polilinha

### Descrição

public function **ImagickDraw::polyline**([array](language.types.array.md) `$coordinates`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma polilinha usando o traço atual, a largura do traço e a cor ou
textura de preenchimento, usando o array de coordenadas especificado.

### Parâmetros

`coordinates`
:   array de coordenadas x e y: array( array( 'x' => 4, 'y' => 6 ), array( 'x' => 8, 'y' => 10 ) )

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::polyline()****

```
<?php
function polyline($strokeColor, $fillColor, $backgroundColor) {
    $draw = new \ImagickDraw();

    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(5);

    $points = [
        ['x' => 40 * 5, 'y' => 10 * 5],
        ['x' => 20 * 5, 'y' => 20 * 5],
        ['x' => 70 * 5, 'y' => 50 * 5],
        ['x' => 60 * 5, 'y' => 15 * 5]
    ];

    $draw->polyline($points);

    $image = new \Imagick();
    $image->newImage(500, 300, $backgroundColor);
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
