# Define o tamanho geral da tela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.setviewbox.php

---

# ImagickDraw::setViewbox

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setViewbox — Define o tamanho geral da tela

### Descrição

public function **ImagickDraw::setViewbox**(  
    [int](language.types.integer.md) `$left_x`,  
    [int](language.types.integer.md) `$top_y`,  
    [int](language.types.integer.md) `$right_x`,  
    [int](language.types.integer.md) `$bottom_y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Define o tamanho geral da tela a ser gravado com os dados vetoriais do desenho.
Geralmente isso será especificado usando o mesmo tamanho da imagem da tela.
Quando os dados vetoriais são salvos nos formatos SVG ou MVG, a caixa de visualização é usada
para especificar o tamanho da imagem da tela na qual um visualizador renderizará
os dados vetoriais.

### Parâmetros

`left_x`
:   coordenada x esquerda

`top_y`
:   coordenada y esquerda

`right_x`
:   coordenada x direita

`bottom_y`
:   coordenada y direita

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setViewBox()****

```
<?php
function setViewBox($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);

    /*

    Define o tamanho geral da tela a ser gravado com os dados vetoriais do desenho. Geralmente isso será especificado usando o mesmo tamanho da imagem da tela. Quando os dados vetoriais são salvos nos formatos SVG ou MVG, a caixa de visualização é usada para especificar o tamanho da imagem da tela na qual um visualizador renderizará os dados vetoriais.

     */

    $draw->circle(250, 250, 250, 0);
    $draw->setviewbox(0, 0, 200, 200);
    $draw->circle(125, 250, 250, 250);
    $draw->translate(250, 125);
    $draw->circle(0, 0, 125, 0);

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
