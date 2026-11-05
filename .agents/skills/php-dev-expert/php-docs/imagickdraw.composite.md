# Compõe uma imagem sobre a imagem atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.composite.php

---

# ImagickDraw::composite

(PECL imagick 2, PECL imagick 3)

ImagickDraw::composite — Compõe uma imagem sobre a imagem atual

### Descrição

public function **ImagickDraw::composite**(  
    [int](language.types.integer.md) `$composite`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$width`,  
    [float](language.types.float.md) `$height`,  
    [Imagick](class.imagick.md) `$image`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Compõe uma imagem sobre a imagem atual, usando o operador de composição
especificado, a posição especificada e o tamanho especificado.

### Parâmetros

`composite`
:   Operador de composição.
    Uma das constantes de [operação de composição](imagick.constants.md#imagick.constants.compositeop)
    (`imagick::COMPOSITE_*`).

`x`
:   Coordenada x do canto superior esquerdo.

`y`
:   Coordenada y do canto superior esquerdo.

`width`
:   Largura da imagem de composição.

`height`
:   Altura da imagem de composição.

`image`
:   O objeto [Imagick](class.imagick.md) de onde a imagem de composição foi tirada.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::composite()****

```
<?php
function composite($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setFillOpacity(1);
    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setStrokeWidth(2);
    $draw->setFont("../fonts/CANDY.TTF");
    $draw->setFontSize(140);
    $draw->rectangle(0, 0, 1000, 300);
    $draw->setFillColor('white');
    $draw->setfillopacity(1);
    $draw->annotation(50, 180, "Lorem Ipsum!");

    // Cria um objeto de imagem no qual os comandos de desenho possam ser renderizados
    $imagick = new \Imagick();
    $imagick->newImage(1000, 302, $backgroundColor);
    $imagick->setImageFormat("png");

    // Renderiza os comandos de desenho no objeto ImagickDraw
    // na imagem.
    $imagick->drawImage($draw);

    // Envia a imagem para o navegador
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
