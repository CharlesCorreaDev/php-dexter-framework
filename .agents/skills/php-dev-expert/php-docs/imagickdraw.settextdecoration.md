# Especifica uma decoração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickdraw.settextdecoration.php

---

# ImagickDraw::setTextDecoration

(PECL imagick 2, PECL imagick 3)

ImagickDraw::setTextDecoration — Especifica uma decoração

### Descrição

public function **ImagickDraw::setTextDecoration**([int](language.types.integer.md) `$decoration`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Especifica uma decoração a ser aplicada ao fazer anotações com texto.

### Parâmetros

`decoration`
:   Uma das constantes [DECORATION](imagick.constants.md#imagick.constants.decoration)
    (`imagick::DECORATION_*`).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ImagickDraw::setTextDecoration()****

```
<?php
function setTextDecoration($strokeColor, $fillColor, $backgroundColor, $textDecoration) {

    $draw = new \ImagickDraw();

    $draw->setStrokeColor($strokeColor);
    $draw->setFillColor($fillColor);
    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);
    $draw->setTextDecoration($textDecoration);
    $draw->annotation(50, 75, "Lorem Ipsum!");

    $imagick = new \Imagick();
    $imagick->newImage(500, 200, $backgroundColor);
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
