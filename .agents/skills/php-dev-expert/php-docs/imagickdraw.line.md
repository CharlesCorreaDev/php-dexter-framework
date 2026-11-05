# Desenha uma linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.line.php

---

# ImagickDraw::line

(PECL imagick 2, PECL imagick 3)

ImagickDraw::line — Desenha uma linha

### Descrição

public function **ImagickDraw::line**(  
    [float](language.types.float.md) `$start_x`,  
    [float](language.types.float.md) `$start_y`,  
    [float](language.types.float.md) `$end_x`,  
    [float](language.types.float.md) `$end_y`  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Desenha uma linha na imagem usando a cor, a opacidade e a largura do traço atuais.

### Parâmetros

`start_x`
:   Coordenada x de início

`start_y`
:   Coordenada y de início

`end_x`
:   Coordenada x final

`end_y`
:   Coordenada y final

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::line()****

```
<?php
function line($strokeColor, $fillColor, $backgroundColor) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);

    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);

    $draw->line(125, 70, 100, 50);
    $draw->line(350, 170, 100, 150);

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
