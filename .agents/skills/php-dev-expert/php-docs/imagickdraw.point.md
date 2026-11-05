# Desenha um ponto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.point.php

---

# ImagickDraw::point

(PECL imagick 2, PECL imagick 3)

ImagickDraw::point — Desenha um ponto

### Descrição

public function **ImagickDraw::point**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha um ponto usando a cor e a espessura atual do traço nas coordenadas especificadas.

### Parâmetros

`x`
:   Coordenada x do ponto.

`y`
:   Coordenada y do ponto.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::point()****

```
<?php
function point($fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setFillColor($fillColor);

    for ($x = 0; $x < 10000; $x++) {
        $draw->point(rand(0, 500), rand(0, 500));
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
