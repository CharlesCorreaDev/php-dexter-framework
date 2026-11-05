# Associa um caminho de recorte nomeado à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setclippath.php

---

# ImagickDraw::setClipPath

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setClipPath — Associa um caminho de recorte nomeado à imagem

### Descrição

public function **ImagickDraw::setClipPath**([string](language.types.string.md) `$clip_mask`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Associa um caminho de recorte nomeado à imagem. Somente as áreas desenhadas pelo
traçado de recorte serão modificadas enquanto ele permanecer em vigor.

### Parâmetros

`clip_mask`
:   o nome do caminho de recorte

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setClipPath()****

```
<?php
function setClipPath($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeWidth(2);

    $clipPathName = 'testClipPath';

    $draw->pushClipPath($clipPathName);
    $draw->rectangle(0, 0, 250, 250);
    $draw->popClipPath();
    $draw->setClipPath($clipPathName);
    $draw->rectangle(100, 100, 400, 400);

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
