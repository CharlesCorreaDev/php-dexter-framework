# Indica que os comandos subsequentes até um comando ImagickDraw::opPattern() compreendem a definição de um padrão nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.pushpattern.php

---

# ImagickDraw::pushPattern

(PECL imagick 2, PECL imagick 3)

ImagickDraw::pushPattern — Indica que os comandos subsequentes até um comando ImagickDraw::opPattern() compreendem a definição de um padrão nomeado

### Descrição

public function **ImagickDraw::pushPattern**(  
    [string](language.types.string.md) `$pattern_id`,  
    [float](language.types.float.md) `$x`,  
    [float](language.types.float.md) `$y`,  
    [float](language.types.float.md) `$width`,  
    [float](language.types.float.md) `$height`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Indica que os comandos subsequentes até um comando DrawPopPattern()
compreendem a definição de um padrão nomeado. O espaço do padrão recebe
coordenadas do canto superior esquerdo, largura e altura, e se torna seu próprio
espaço de desenho. Qualquer coisa que possa ser desenhada pode ser usada na definição
de um padrão. Padrões nomeados podem ser usados ​​como definições de traçado ou pincel.

### Parâmetros

`pattern_id`
:   O Id do padrão

`x`
:   coordenada x do canto superior esquerdo

`y`
:   coordenada y do canto superior esquerdo

`width`
:   largura do padrão

`height`
:   altura do padrão

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::pushPattern()****

```
<?php
function pushPattern($strokeColor, $fillColor, $backgroundColor) {
    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(1);
    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(1);

    $draw->pushPattern("MyFirstPattern", 0, 0, 50, 50);
    for ($x = 0; $x < 50; $x += 10) {
        for ($y = 0; $y < 50; $y += 5) {
            $positionX = $x + (($y / 5) % 5);
            $draw->rectangle($positionX, $y, $positionX + 5, $y + 5);
        }
    }
    $draw->popPattern();

    $draw->setFillOpacity(0);
    $draw->rectangle(100, 100, 400, 400);
    $draw->setFillOpacity(1);

    $draw->setFillOpacity(1);

    $draw->push();
    $draw->setFillPatternURL('#MyFirstPattern');
    $draw->setFillColor('yellow');
    $draw->rectangle(100, 100, 400, 400);
    $draw->pop();

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
